<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>quizA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

body {
    background: #6E6E6E;
}

.wrapper {
    max-width: 600px;
    margin: 80px auto 50px;
    padding: 30px;
    border-radius: 20px;
    background: #E6E6E6;
    position: relative;
    min-height: 400px;
    overflow: hidden
}

.wrapper .wrap {
    width: 500px;
    position: absolute;
    left: 50px;
    transition: 0.6s
}

.h4 {
    margin: 0
}

label {
    display: block;
    margin-bottom: 15px;
    font-size: 1.2rem;
    cursor: pointer
}

.options {
    position: relative;
    padding-left: 30px
}

.options input {
    opacity: 0
}

.input {
    background-color: #c0e2df;
    border: 2px solid #444;
    border-radius: 5px;
}


.checkmark {
    position: absolute;
    top: 4px;
    left: 3px;
    height: 20px;
    width: 20px;
    background-color: #c0e2df;
    border: 2px solid #444;
    border-radius: 50%
}

.options input:checked~.checkmark:after {
    display: block
}

.options .checkmark:after {
    content: "";
    width: 9px;
    height: 9px;
    display: block;
    background: white;
    position: absolute;
    top: 51%;
    left: 51%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s
}

.options input[type="radio"]:checked~.checkmark {
    background: #590995;
    border: 2px solid #590995;
    transition: 300ms ease-in-out 0s
}

.options input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1)
}

.btn.btn-primary {
    background-color: rgb(63, 139, 139);
    border: 1px solid rgb(63, 139, 139)
}

.btn {
    background-color: inherit;
    border: 1px solid rgb(63, 139, 139);
    border-radius: 20px
}

.btn:focus {
    box-shadow: none
}

.btn:hover {
    background-color: teal;
    color: #fff
}

.fa-arrow-right,
.fa-arrow-left {
    transition: 0.2s ease-in all
}

.btn.btn-primary:hover .fa-arrow-right {
    transform: translate(8px)
}

.btn.btn-primary:hover .fa-arrow-left {
    transform: translate(-8px)
}

@media(max-width: 767px) {
    .wrapper {
        margin: 30px 10px;
        height: 420px
    }
    .wrapper .wrap {
        width: 280px;
        left: 15px
    }
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 28px;
    background-color: inherit
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s
}

.slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 4px;
    background-color: #590995;
    -webkit-transition: .4s;
    transition: .4s
}

input:checked+.slider {
    background-color: #000
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3
}

input:checked+.slider:before {
    transform: translateX(30px);
    background-color: #fff
}

.slider.round {
    border-radius: 34px
}

.slider.round:before {
    border-radius: 50%
}

.dark-theme {
    background-color: #222
}
    </style>
</head>
<body>
