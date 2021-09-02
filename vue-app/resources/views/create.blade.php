<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    <div id="app" class="container">

        <!-- @include('projects.list') -->

        <form method='POST' action="/projects">

            <div class="control">

                <label for="name" class="label">Project Name:</label>


                <input type="text" name="name" id="name" class="input">

            </div>

            <div class="control">

                <label for="description" class="label"></label>

                <input type="text" name="description" id="description" class="input">

            </div>
            <div class="control">

                <button class="button is-primary">Create</button>

            </div>



        </form>


    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

    <script src="js/app.js"></script>
</body>

</html>