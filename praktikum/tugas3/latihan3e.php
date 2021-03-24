<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

$items = [
    [
        "item" => "NCT - 'RESONANCE Pt. 2' The 2nd Album (Arrival Ver.)",
        "photo" => "album1.jpg",
        "details" => "Includes 1 photobook,1 photo card, 1 access card (random 1 out of 23), 1 half-cut sticker (random 1 out of 2), 1 folded poster, 1 postcard.",
        "price" => "Rp 420.000",
        "category" => "Album",
        "status" => "Ready Stock"
    ],
    [
        "item" => "IU - 5th Album ‘LILAC’ (HILAC Ver.)",
        "photo" => "album-2.jpg",
        "details" => "Includes 1ea CD, 72p Photo Book, 1ea Lyric Book, 1ea AR Photo Card, 1ea Photo Card, 1ea ID Photo Kit, 1ea Artwork Sticker.",
        "price" => "Rp 316.000",
        "category" => "Album",
        "status" => "Pre-Order"
    ],
    [
        "item" => "BTS – BE (Deluxe Edition)",
        "photo" => "album-3.jpg",
        "details" => "Includes 1ea Photo Book, 1ea Making Book, 1ea CD, 1ea Lyric Poster, 8ea Photo Card, 1ea Polaroid Photo Card, 1ea Photo Frame, 7ea Postcard, 1ea Poster.",
        "price" => "Rp. 680.000",
        "category" => "Album",
        "status" => "Ready Stock"
    ],
    [
        "item" => "SEVENTEEN OFFICIAL LIGHTSTICK VER. 2",
        "photo" => "lightstick-1.jpg",
        "details" => "SEVENTEEN released Official LIGHTSTICK Ver. 2 on August 28, 2020. Includes Outbox, Light Stick, Warranty, Sticker, Strap.",
        "price" => "Rp 610.000",
        "category" => "Light Stick",
        "status" => "Ready Stock"
    ],
    [
        "item" => "WayV OFFICIAL FANLIGHT",
        "photo" => "lightstick-2.jpg",
        "details" => "WayV released Official Fanlight on October 30, 2019. Includes Package, Fanlight, Strap, Dustbag, User manual and Warranty.",
        "price" => "Rp 710.000",
        "category" => "Light Stick",
        "status" => "Ready Stock"
    ],
    [
        "item" => "NCT DREAM – ‘Dream A Dream’ Photo Book",
        "photo" => "photobook-1.jpg",
        "details" => "Released on Februari 26, 2021. Includes 1pc Photo Book, 1pc Photo Card Set, 1pc A2 Folded Poster, 1pc Mini Poster.",
        "price" => "Rp 660.000",
        "category" => "Photo Book",
        "status" => "Pre-Order"
    ],
    [
        "item" => "STRAY KIDS – STRAY KIDS 2nd PHOTOBOOK [stay in playground]",
        "photo" => "photobook-2.jpg",
        "details" => "Includes 1ea Photo Book, 1ea Paper Holder, 1ea Special DVD, 1ea Wappen Keyring, 1sheet ID Picture, Deco Sticker, Post Card Set, 1sheet POP-UP Card, 1sheet Folding Poster, 1set Message Scratch Card, DVD",
        "price" => "Rp 880.000",
        "category" => "Photo Book",
        "status" => "Pre-Order"
    ],
    [
        "item" => "TXT – Minisode 1 : BLUE HOUR (Album + Photo Card Bundling)",
        "photo" => "bundling-1.jpg",
        "details" => "This bundling includes 3 (three) albums, 1 for each version (R Ver. + AR Ver. + VR Ver.). All TXT Members Special Photo Card (5 photo cards, 1 for each member).",
        "price" => "Rp 1.050.000",
        "category" => "Bundling",
        "status" => "Ready Stock"
    ],
    [
        "item" => "DAY6 – SPECIAL BUNDLING",
        "photo" => "bundling-2.jpg",
        "details" => "This bundling includes one DAY6 (Even of Day) [The Book of Us : Gluon – Nothing can tear us apart] Album, one DAY6 Official Light Band, one random DAY6 (Even of Day) Photo Card.",
        "price" => "Rp 800.000",
        "category" => "Bundling",
        "status" => "Ready Stock"
    ],
    [
        "item" => "ENHYPEN – BORDER : DAY ONE (Photo Card Benefit Bundling)v",
        "photo" => "bundling-3.jpg",
        "details" => "This bundling includes 7 (seven) albums. Purchase of this bundling is guaranteed to receive all ENHYPEN Members Special Photo Card (7 photo cards (1 for each member)).",
        "price" => "Rp 2.500.000",
        "category" => "Bundling",
        "status" => "Pre-Order"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Latihan 3e</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <table class="table table-hover">
            <thead>
                <tr class="table-active text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Items</th>
                    <th scope="col">Details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $no => $itm) : ?>
                    <tr>
                        <td><?= $id = 1; ?></td>
                        <td><img src="img/<?= $itm["photo"]; ?>"></td>
                        <td><b><?= $itm["item"]; ?></td>
                        <td><?= $itm["details"]; ?></td>
                        <td><?= $itm["price"]; ?></td>
                        <td><?= $itm["category"]; ?></td>
                        <td><?= $itm["status"]; ?></td>
                    </tr>
                <?php $id++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>