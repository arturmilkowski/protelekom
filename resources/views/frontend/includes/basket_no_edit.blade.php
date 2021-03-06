@if ($basket->productsCount() > 0)
                    <div class="row mt-5 mb-1"><div class="col-sm text-center"><h2>Koszyk</h2></div></div>
                    <div class="row">
                        <div class="col-sm mb-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nazwa</th>
                                        {{--
                                        <th scope="col">pojemność</th>
                                        <th scope="col">koncentracja</th>
                                        <th scope="col">kategoria</th>
                                        --}}
                                        <th scope="col">Cena</th>
                                        <th scope="col">Ilość</th>
                                        <th scope="col">Wartość</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($basket->getItems() as $item)
                                    <tr>
                                        <th scope="row">{{ $item->type_id }}</th>
                                        <td>{{ $item->brand }} {{ $item->name }} {{ $item->type_name }}</td>
                                        {{--
                                        <td>{{ $item->type_name }}</td>
                                        <td>{{ $item->concentration }}</td>
                                        <td>{{ $item->category }}</td>
                                        --}}
                                        <td>{{ $item->price }} zł</td>
                                        <td>{{ $item->quantity }} szt</td>
                                        <td>{{ number_format($item->subtotal_price, 2) }} zł</td>
                                    </tr>
@endforeach
                                    <tr>
                                        <td colspan="5">
                                            Produkty razem: {{ $basket->totalPrice() }} zł
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
@endif
