<!DOCTYPE html>
<html lang="en"  data-bs-theme="{{session()->get("colorstyle")}}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">

</head>
<body>
    {{__("Welcome")}}

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima expedita repudiandae sit vitae tempora amet maxime rerum, beatae dolorum consequuntur optio dignissimos laudantium maiores adipisci. Est dolorem nesciunt quae praesentium.
Distinctio fuga nulla delectus perspiciatis adipisci earum, numquam molestias autem minus voluptatum dignissimos commodi a accusantium excepturi reiciendis itaque ut similique omnis ea neque dolore, vel eaque ipsa. Architecto, recusandae?
Accusamus modi quae dolor itaque consectetur rem maiores illo. Sequi qui officiis ipsum praesentium vitae perspiciatis natus vero ipsa, assumenda dolor voluptatibus porro reprehenderit. Nostrum ratione quasi et ipsa neque?
Auas alias ullam magnam iusto beatae facere voluptas aliquid suscipit eum rerum dicta repellat, asperiores voluptate minima incidunt deleniti dignissimos ab molestias aliquam impedit. Quas voluptatem commodi debitis nam!
Neque magni accusamus optio suscipit sapiente quidem officiis voluptas voluptatem consectetur quas velit reiciendis libero aliquid accusantium voluptatibus ipsa laborum odio mollitia recusandae quibusdam aliquam, labore illo? A, aspernatur facere.</p>

<a href="/about">{{__("About")}}</a>
<a href="/register">{{__("Registration")}}</a>
<a href="/login">{{__("Login")}}</a>
<a href="/changingdata">{{__("Changing data")}}</a>

<a href="/hu">{{__("Hungary")}}</a>
<a href="/en">{{__("English")}}</a>

<a href="/dark">{{__("Dark mode")}}</a>
<a href="light">{{__("Light mode")}}</a>


<h3>{{__("Reviews about us")}}</h3>






@foreach ($comments as $comment)
    
<li>{{$comment->id. "- " .$comment->body}}</li> <hr>

    
@endforeach

</body>
</html>