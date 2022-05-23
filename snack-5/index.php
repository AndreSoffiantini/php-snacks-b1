<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->

<?php 

$long_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet incidunt ab veritatis sed. Magnam assumenda, non ipsa atque exercitationem veniam soluta eveniet molestias beatae ea quibusdam, animi eligendi at deserunt unde cupiditate suscipit. Ipsam, aut repudiandae explicabo cum exercitationem quae nisi illum recusandae rerum? Maxime illo sed perspiciatis voluptas commodi, debitis voluptatum veritatis laborum quo illum autem esse voluptatem repellendus eum hic laboriosam ea expedita aperiam fugit. Aspernatur repudiandae sint culpa voluptas ipsa unde necessitatibus harum alias similique pariatur error minus commodi assumenda, cum distinctio quam neque officiis laboriosam tempora facilis accusantium suscipit? Atque quo error quisquam quod repudiandae voluptate laudantium nostrum perspiciatis architecto iure in animi veniam cumque id necessitatibus enim, maxime optio ab suscipit ducimus! Sed animi odio eius ad accusamus temporibus nemo! Sint quos architecto non, tempore consequatur doloremque minus magnam perferendis similique laboriosam minima cumque blanditiis officia aliquid quae voluptatibus quis nihil quasi nesciunt sunt placeat asperiores corrupti. Doloribus quos eos aliquam consequatur eum porro possimus et quisquam natus, repudiandae maiores illo nesciunt, dolor vero. Veniam vero officiis esse? At, eaque alias. Quaerat nemo natus odio dolore sunt nulla at dolorum aliquam cupiditate molestias ut earum magni, quae, est accusantium soluta adipisci nostrum debitis nesciunt deserunt?";

//var_dump(explode(".", $long_text));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Testo lungo</h1>

    <p> <?= $long_text ?> </p>

    <h2>Paragrafi</h2>

    <ul>
         <?php foreach (explode(".", $long_text) as $paragraph) : ?>

            <li> <?= $paragraph ?> </li>

        <?php endforeach ?>
    </ul>

   

</body>
</html>