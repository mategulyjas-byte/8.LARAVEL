<h1>Állatok listája</h1>
<table>
    <thead>
        <tr>
            <th>Állat neve</th>
            <th>Háziállat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($allatok as $animal)
        <tr>
            <td>{{ $animal->name }}</td>
            <td>{{ $animal->haziallat ? 'igen' : 'nem' }}</td>
        </tr>
        <td>
            <form action="/animals/torles/{{ $animal->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Törlés</button>
            </form>
        </td>
        @endforeach
    </tbody>
</table>
<br>
<form action="/animals/mentes" method="POST">
    @csrf
    <label>Állat neve:</label>
    <input type="text" name="name" required>
    <label>Háziállat?</label>
    <select name="haziallat">
        <option value="1">igen</option>
        <option value="0">nem</option>
    </select>
    <button type="submit">Mentés</button>
</form>