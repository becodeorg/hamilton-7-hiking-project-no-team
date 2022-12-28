<!-- string $name,float $distance,$duration, float $elevation_gain,string $description,int $updateNeeded = 0 -->
<h2>Registration</h2>

<form action="addhike" method="post">
    <div>
        <label for="name">name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="distance">Distance</label>
        <input type="text" name="distance">
    </div>
    <div>
        <label for="duration">Duration</label>
        <input type="text" name="duration">
    </div>
    <div>
        <label for="elevation">Elevation gain</label>
        <input type="text" name="elevation">
    </div>
    <div>
        <label for="description">Description: </label>
        <input type="textfield" name="description">
    </div>
    <button type="submit">Register !</button>
</form>