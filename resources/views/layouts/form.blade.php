{{-- {{dd($post -> category)}} --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .myText-area{
            resize:none;
            width:300px;
            height:100px;
        }
    </style>

</head>
<body>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Hotel Name</td><td>:</td><td><input type="text" name="hotelName" value="{{ @$post -> hotelName}}"></td>
            </tr>
            <tr>
                <td>Location</td><td>:</td><td><input type="text" name="location" value="{{ @$post -> location}}"></td>
            </tr>
            <tr>
                <td>Price per night</td><td>:</td><td><input type="number" name="price" value="{{ @$post -> price}}"></td>
            </tr>
            <tr>
                <td>image</td><td>:</td><td><input type="file" name="path"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                <input type="checkbox" name="category[]" value="Shower" @if ( @$post -> category[0] )
                {{ 'checked' }}
                @endif>
                <label for="vehicle1"> Shower</label><br>
                <input type="checkbox" name="category[]" value="Pool" @if ( @$post -> category[1] )
                {{ 'checked' }}
                @endif>
                <label for="vehicle2"> Pool</label><br>
                <input type="checkbox" name="category[]" value="Breakfast" @if ( @$post -> category[2] )
                {{ 'checked' }}
                @endif>
                <label for="vehicle3"> Breakfast</label><br>
                </td>
                <td>
                <input type="checkbox" name="category[]" value="Wifi" @if ( @$post -> category[3] )
                {{ 'checked' }}
                @endif>
                <label for="vehicle1"> Wifi</label><br>
                <input type="checkbox" name="category[]" value="Bed" @if ( @$post -> category[4] )
                {{ 'checked' }}
                @endif>
                <label for="vehicle2"> Double Bed</label><br>
                <input type="checkbox" name="category[]" value="Refrigerator" @if ( @$post -> category[5] )
                {{ 'checked' }}
                @endif>
                <label for="vehicle3"> Refrigerator</label><br>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Description</td><td>:</td><td><textarea name="desc" class="myText-area">{{ @$post -> desc}}</textarea></td>
            </tr>
        </table>

        <input type="submit">
    </form>
</body>
</html>

