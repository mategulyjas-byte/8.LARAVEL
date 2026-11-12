<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    

    {{__("Welcome")}}

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima expedita repudiandae sit vitae tempora amet maxime rerum, beatae dolorum consequuntur optio dignissimos laudantium maiores adipisci. Est dolorem nesciunt quae praesentium.
Distinctio fuga nulla delectus perspiciatis adipisci earum, numquam molestias autem minus voluptatum dignissimos commodi a accusantium excepturi reiciendis itaque ut similique omnis ea neque dolore, vel eaque ipsa. Architecto, recusandae?
Accusamus modi quae dolor itaque consectetur rem maiores illo. Sequi qui officiis ipsum praesentium vitae perspiciatis natus vero ipsa, assumenda dolor voluptatibus porro reprehenderit. Nostrum ratione quasi et ipsa neque?
Aut, velit alias cumque sequi consequatur tempore totam odio non, cum nulla officiis, facere omnis commodi saepe at impedit amet natus quasi aliquam fuga porro aliquid repudiandae voluptates? Debitis, aspernatur!
Numquam fugiat, ducimus tempora eaque eos quisquam assumenda? Minus, nihil tenetur? Unde quos laborum nisi blanditiis. Nulla error nobis aliquid! Nam sed, debitis sunt exercitationem qui sequi ut esse quaerat?
Placeat dicta laborum deleniti cum commodi maxime architecto facere expedita fugiat ad eius nemo, exercitationem quo iure? Odio voluptates optio aspernatur aliquam repellendus, dolores sapiente qui deleniti eum! Magnam, sed?
Veniam, magnam quo nisi, magni iste maxime voluptatum voluptatibus recusandae, debitis impedit velit? Possimus explicabo non minus adipisci maiores eligendi nesciunt consectetur porro iste similique aut corporis doloribus, delectus facilis.
Error consequatur at ut dolores voluptatum omnis minus saepe cupiditate culpa maxime distinctio corporis fugit debitis harum, in labore hic autem fugiat praesentium? Aperiam commodi suscipit id, labore incidunt hic.
Iure quas alias ullam magnam iusto beatae facere voluptas aliquid suscipit eum rerum dicta repellat, asperiores voluptate minima incidunt deleniti dignissimos ab molestias aliquam impedit. Quas voluptatem commodi debitis nam!
Neque magni accusamus optio suscipit sapiente quidem officiis voluptas voluptatem consectetur quas velit reiciendis libero aliquid accusantium voluptatibus ipsa laborum odio mollitia recusandae quibusdam aliquam, labore illo? A, aspernatur facere.</p>


<a href="/about">{{__("About")}}</a>
<a href="/register">{{__("Registration")}}</a>
<a href="/login">{{__("Login")}}</a>
<a href="/changingdata">{{__("Changing data")}}</a>



<a href="/hu">{{__("Hungary")}}</a>
<a href="/en">{{__("English")}}</a>



<h3>{{__("Reviews about us")}}</h3>


@foreach ($comments as $comment)
    
<li>{{$comment->id. "- " .$comment->body}}</li> <hr>

    
@endforeach

</body>
</html>