<!-- resources/views/experiences/create.blade.php -->
<h1>Add New Experience</h1>
<form action="{{ route('experiences.store') }}" method="POST">
    @csrf
    <label for="company">Company:</label>
    <input type="text" name="company" id="company">

    <label for="position">Position:</label>
    <input type="text" name="position" id="position">

    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>

    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" id="start_date">

    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" id="end_date">

    <button type="submit">Save</button>
</form>
