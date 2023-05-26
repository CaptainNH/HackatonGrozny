@extends('layouts.basic')
@section('content')
    <div style="background-color: white">
        <h2 style="color: #2CB124; margin-left: 2%;">Овечий рай</h2>
        <hr>
        <div class="description"
            style="display: flex; background-color: #D9DACD; border-radius: 10px; margin: 20px; padding: 15px;">
            <img src="images/sheep.jpg" alt="" style="border-radius: 10px;">
            <div>
                <div style="margin: 30px;">
                    <h4 style=" font-weight: 700;">Описание фермы</h4>
                    <p style="font-size: 18px;">Добро пожаловать в "Овечий рай" – место, где овцы расцветают в полном
                        великолепии, живя в гармонии с
                        природой. Здесь зеленые луга, покрытые росой, служат пастбищем для овец. Их блестящая белоснежная
                        шерсть
                        и мягкие глаза создают впечатляющий образ. "Овечий рай" - это уникальное пространство, где человек и
                        животное сосуществуют в гармонии. Приходите и погрузитесь в этот рай, чтобы испытать волшебство
                        овечьего
                        мира.</p>
                </div>

            </div>
        </div>
        <div class="description"
            style="display: flex; background-color: #D9DACD; border-radius: 10px; margin: 20px; justify-content: space-around;">
            <div class="row">

                <div class="col">
                    <h3>Адрес</h3>
                    <p style="font-size: 18px;">
                        Ул.Пушистая, 12
                    </p>
                    <p style="font-size: 18px;">
                        Деревня Барашково, Россия
                    </p>
                </div>

                <div class="col">
                    <h3>Контакты</h3>
                    <p style="font-size: 18px;">
                        тел: +7 (800) 555-45-45
                    </p>
                    <p style="font-size: 18px;">
                        email: bestSheep@mail.ru
                    </p>
                </div>
            </div>
        </div>
        <div class="description"
            style="display: flex; background-color: #D9DACD; border-radius: 10px; margin: 20px; justify-content: center;">
            <div style="margin: 20px;">
                <iframe style="border-radius: 10px;" width="560" height="315"
                    src="https://www.youtube.com/embed/XhV3Mhgi6Ck" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>
    </div>
@endsection
