document.addEventListener("DOMContentLoaded", async () => {
    // get amount of characters
    let i = document.querySelectorAll(".character-field").length - 1;

    const options = await fetchOptions();

    $("#add-character-btn").click(() => {
        i++;
        $("#characters").append(`<tr>
                <td>
                    <label class="form-label text-white">Character Name</label>
                    <select name="actors[${i}][id]" class="form-select bg-dark text-white">
                        <option selected="selected" disabled>-- Open this select menu --</option>
                        ${options}
                    </select>
                </td>
                <td>
                    <label class="form-label text-white">Character Name</label>
                    <input type="text" name="characters[${i}][name]"
                    class="form-control bg-dark text-white">
                </td>
            </tr>
        `);
    });
});

const fetchOptions = async () => {
    // get actors from api
    const response = await fetch("/api/actors/all");
    const json = await response.json();
    const actors = json.actors;

    let options = "";

    // construct html
    for await (const [_, actor] of Object.entries(actors)) {
        options = options.concat(
            `<option value="${actor.id}">${actor.name}</option>`
        );
    }

    return options;
};
