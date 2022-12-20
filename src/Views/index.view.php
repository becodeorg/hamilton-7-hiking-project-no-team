<ul>
    <?php foreach ($hikes as $hike) : ?>
        <li>
            <a href="<?=$hike['ID']; ?>">
                <span><?= $hike['name'] ?></span>
                <span><?= $hike['creationDate']?></span>
                <span><?= $hike['distance']?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>