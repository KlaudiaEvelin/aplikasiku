<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="new-event-form">
        <label class="window-title">New Event form</label>
        <form action="{{ route('events.store') }}" method="POST" class="event-form">
            @csrf <label>Title</label>
            <input type="text" name="title" id="new-event-title" placeholder="Type here...">

            <label>Header Image URL</label>
            <input type="text" name="header_img" id="new-event-header" placeholder="Type here...">

            <label>Description</label>
            <input type="text" name="description" id="new-event-description" placeholder="Type here...">

            <label>Start</label>
            <input type="datetime-local" name="start" id="new-event-start">

            <label>Finish</label>
            <input type="datetime-local" name="finish" id="new-event-finish">

            <label>Status</label>
            <div class="status-options">
                <input type="radio" name="status" value="ongoing" id="ongoing"> <label for="ongoing">Ongoing</label>
                <input type="radio" name="status" value="finished" id="finished"> <label for="finished">Finished</label>
                <input type="radio" name="status" value="suspended" id="suspended"> <label for="suspended">Suspended</label>
            </div>

            <button type="submit">Submit Event</button>
        </form>
    </div>
</body>
</html>