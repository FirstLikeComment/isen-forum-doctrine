/**
 * Created by IntelliJ IDEA.
 * User: anton
 * Date: 10/3/2017
 * Time: 5:08 PM
 */

<html>
    <body>
        <h1>Forum</h1>
        <form action="/forum/add" method="post">
            Ajoute un forum : <input type="text" name="title"/> <input type="submit" value="Ajouter"/>
        </form>

        <h2>Listes des forums : </h2>
        <ul>
            <?php foreach ($forums as $forum) { ?>
            <li><?php echo $forum->getTitle()?></li>
            <?php } ?>
        </ul>
    </body>
</html>