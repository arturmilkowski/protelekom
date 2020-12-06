                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Imię i nazwisko</th>
                                <td>{{ $user->name }} {{ $user->profile->lastname }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Ulica i numer mieszkania</th>
                                <td>{{ $user->profile->street }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kod pocztowy i miasto</th>
                                <td>{{ $user->profile->zip_code }} {{ $user->profile->city }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Województwo</th>
                                <td>{{ $user->profile->voivodeship->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Telefon</th>
                                <td>{{ $user->profile->phone }}</td>
                            </tr>
                        </tbody>
                    </table>
