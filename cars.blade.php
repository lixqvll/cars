<h1>Cars</h1>

@foreach($mycar as $car)
    <div style="border:1px solid #000; margin:10px; padding:10px;">
        <p>Name: {{ $car['name'] }}</p>
        <p>Number: {{ $car['number'] }}</p>
        <p>Price: {{ $car['price'] }}</p>
        <p>Brand: {{ $car['brand'] }}</p>
        <p>Status: {{ $car['status'] }}</p>
        <img src="{{ $car['image'] }}" width="100">
    </div>
