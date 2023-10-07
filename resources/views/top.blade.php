<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eater</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <style>
        .shopSearch {
            /*display: block;*/
            /*width: 300px;
                                                                        height: 0px;
                                                                        padding: 5px;*/
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.6;
            /*color: rgba(186, 186, 186, 0.845);*/
            /*background-color: rgba(255, 0, 0, 0.882);*/
            background-clip: padding-box;
            /*border: 1px sold gray;*/
            appearance: none;
            border-radius: 0.375rem;
            tansition: border-color .15s;
            box-sizing: content-box;
            /*margin: 0 auto;*/
            jdisplay: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            align-items: center;
            margin-top: 30px;
        }

        .category {
            display: block;
            width: 230px;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.6;
            color: black;
            box-sizing: border-box;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        body {
            background-image: url(img/NYC.jpeg);
            /* 画像を常に上下左右の中央に配置させる */
            background-position: center center;
            /* 画像を繰り返し表示しない */
            background-repeat: no-repeat;
            /* ページなどのコンテンツの高さが画像の高さより大きい時動に固定する */
            background-attachment: fixed;
            /* 画面、ブラウザのサイズに基づいて、背景画像を調整 */
            background-size: cover;
            /* 背景画像が表示されるまでの間に表示される(待機中に表示される)背景のカラー */
            background-color: #000000;

        }
    </style>

</head>

<body>
    @extends('layouts.app')
    @section('content')
        <!-- <div class="d-flex justify-content-center align-items-center top-wrapper">
                                                                                        <div class="d-flex justify-content-center">-->
        <div class="search-area px-5 py-4">
            <div class="search">
                <h1 class="mt-2">おいしいお店を探す</h1>
                <!--<div class="d-flex flex-wrap flex-sm-nowrap">-->
                <form action="{{ route('stores') }}">
                    <!-- <div class="me-2 mb-2">-->
                    <div class="container">
                        <div class="item">

                        </div>
                        <div class="item">
                            <div class="shopSearch"><input name="keyword" type="text"/ placeholder="店名"></div>
                        </div>
                        <div class="item">
                            <div class="category">
                                <select class="form-control form-select" name="category" id="">
                                    <option selected>Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->major_category_name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <input type="submit" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</body>

</html>
