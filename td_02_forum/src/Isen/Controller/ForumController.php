<?php
namespace Isen\Controller;

use Isen\Repository\ForumRepository;
use Isen\Entity\Forum;
use Isen\Entity\Post;

class ForumController extends AbstractController
{

    public function handle()
    {
        switch ($_SERVER['SCRIPT_NAME']) {
            case '/':
                $this->indexAction();
                break;
            
            case '/forum/add':
                $this->addAction();
                break;
            
            case '/forum/show':
                $this->showAction();
                break;
            
            case '/post/add':
                $this->addPostAction();
                break;
            
            default:
                die('Not found');
        }
    }

    public function indexAction()
    {
        $repository = new ForumRepository();
        
        $this->render('index.phtml', array(
            'forums' => $repository->getAll()
        ));
    }

    public function addAction()
    {
        // récupère le nom du nouveau forum
        $forumName = $_POST['title'];
        
        // créee le nouveau forum
        $forum = new Forum();
        $forum->setTitle($forumName);
        
        // ajoute le forum
        $repository = new ForumRepository();
        $repository->add($forum);
        
        // redirige vers la page d'accueil
        header('Location: /');
    }

    public function showAction()
    {
        // récupère l'id du forum
        $forumId = $_GET['id'];
        
        // récupère le forum
        $repository = new ForumRepository();
        
        $this->render('forum.phtml', array(
            'forum' => $repository->get($forumId),
            'forumId' => $forumId
        ));
    }

    public function addPostAction()
    {
        // récupère l'id du forum
        $forumId = $_GET['id'];
        
        // crée le nouveau post, et copie les données
        $post = new Post();
        $post->setTitle($_POST['title']);
        $post->setAuthor($_POST['author']);
        $post->setDate($_POST['date']);
        $post->setContent($_POST['content']);
        
        $repository = new ForumRepository();
        $repository->addPost($forumId, $post);
        
        // redirige vers le forum
        header('Location: /forum/show?id=' . $forumId);
    }
}