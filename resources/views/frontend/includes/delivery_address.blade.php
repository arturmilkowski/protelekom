                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Ulica i numer mieszkania</th>
                                <td>{{ $deliveryAddress->street }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kod pocztowy i miato</th>
                                <td>{{ $deliveryAddress->zip_code }} {{ $deliveryAddress->city }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Województwo</th>
                                <td>{{ $deliveryAddress->voivodeship->name }}</td>
                            </tr>
                        </tbody>
                    </table>
