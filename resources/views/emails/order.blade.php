<html>
<head></head>
<body>
<h1>New order</h1>
<table>
    <tr>
        <td>Name</td>
        <td>{{$order->name}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$order->email}}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{$order->address}}</td>
    </tr>
    <tr>
        <td>City</td>
        <td>{{$order->city}}</td>
    </tr>
    <tr>
        <td>Zip</td>
        <td>{{$order->zip}}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{$order->phone}}</td>
    </tr>
    <tr>
        <td>Item</td>
        <td>{{$item->name}} {{$item->price}} €</td>
    </tr>
    <tr>
        <td>Amount</td>
        <td>{{$order->amount}}</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>{{$order->sum}} €</td>
    </tr>
</table>
</body>
</html>