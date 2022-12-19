let i = 2;

$("#add-character-btn").click(() => {
    i++;
    $("#characters").append(`<tr>
                    <td>
                        <label class="form-label text-white">Character Name</label>
                        <select name="actors[${i}][id]" class="form-select bg-dark text-white">
                            <option selected="selected" disabled>-- Open this select menu --</option>
                            @foreach ($actors as $actor)
                                <option value="{{ $actor->id }}">{{ $actor->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label class="form-label text-white">Character Name</label>
                        <input type="text" name="characters[${i}][name]"
                            class="form-control bg-dark text-white">
                    </td>
                </tr>`);
});
