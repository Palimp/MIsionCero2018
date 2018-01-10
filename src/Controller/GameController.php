<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 *
 * @method \App\Model\Entity\Game[] paginate($object = null, array $settings = [])
 */
class GameController extends AppController {

    var $components = array('Cookie', 'Code');

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {

        $sesion = $this->Code->loadSesion();
        $this->set('trouble', $sesion['trouble']);

        $id = $sesion['id'];
        if (empty($id)) {
            return $this->redirect('/');
        }

        $data = $this->Code->teamsOK($id);
        if (!$sesion['admin']) {
            $team = $this->Code->getTeam();
            $this->set('admin', 0);
            $session = $this->request->session();

            if (empty($team) || $data == 0) {
                return $this->redirect(['action' => 'selectteam']);
            } else {
                $template = 'page' . $sesion['page'];
                if ($sesion['page'] == 44) {

                    $interactions = $this->Code->getPainPoints($team);
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $interactions);
                    $period = $this->Code->getTime();
                    $session->write('period', $period);

                    $this->set('time', '');
                    $this->viewBuilder()->template('page44b');
                } else
                if ($sesion['page'] == 33) {

                    $comments = $this->Code->getQuestion($team, 'Stakes');
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $period = 600;
                    $session->write('period', $period);

                    $this->set('time', '');
                    $this->viewBuilder()->template('page33b');
                } else
                if ($sesion['page'] == 57) {

                    $comments = $this->Code->getQuestion($team, 'Motions');
                    $feelings = $this->Code->getTeamFeelings($team);

                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $this->set('feelings', $feelings);
                    $ambits = $this->Code->getAmbits();
                    $this->set('ambits', $ambits);

                    $period = 300;
                    $session->write('period', $period);

                    $this->set('time', '');
                    $this->viewBuilder()->template('page57b');
                } else
                if ($sesion['page'] == 20) {
                    $comments = $this->Code->getQuestion($team, 'Questions');
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $period = 600;
                    $session->write('period', $period);
                    $this->set('time', '');
                    $this->viewBuilder()->template('page20b');
                } else
                if ($sesion['page'] == 8) {
                    $comments = $this->Code->getComment($team);
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);

                    $this->set('trouble', $sesion['trouble']);
                    $this->set('time', '');
                    $this->viewBuilder()->template('page8b');
                } else
                if ($sesion['page'] == 11) {
                    $comments = $this->Code->getCommentSel($team);
                    $period = $this->Code->getTime(1);
                    $session->write('period', $period);
                    $ambits = $this->Code->getAmbits();
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $this->set('ambits', $ambits);
                    $this->set('time', '');
                    $q = $this->Code->getChallengesTeam($team);

                    if (empty($q)) {
                        $this->viewBuilder()->template('page11b');
                    } else {
                        $this->set('challenges', $q);
                        $this->viewBuilder()->template('page11c');
                    }
                } else
                if ($sesion['page'] == 23) {
                    $comments = $this->Code->getQuestionSel($team);
                    $ambits = $this->Code->getAmbits();
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $this->set('ambits', $ambits);
                    $period = $this->Code->getTime(2);
                    $session = $this->request->session();
                    $session->write('period', $period);
                    $this->set('time', '');
                    $q = $this->Code->getQuestionAmbit($team);

                    if (empty($q)) {
                        $this->viewBuilder()->template('page23b');
                    } else {
                        $this->set('challenges', $q);
                        $this->viewBuilder()->template('page23c');
                    }
                } else
                if ($sesion['page'] == 36) {
                    $comments = $this->Code->getQuestionSel($team, 'Stakes');
                    $ambits = $this->Code->getAmbits();
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $this->set('ambits', $ambits);
                    $period = $this->Code->getTime(2);
                    $session = $this->request->session();
                    $session->write('period', $period);
                    $this->set('time', '');
                    $q = $this->Code->getQuestionAmbit($team, 'Stakes');

                    if (empty($q)) {
                        $this->viewBuilder()->template('page36b');
                    } else {
                        $this->set('challenges', $q);
                        $this->viewBuilder()->template('page36c');
                    }
                } else
                if ($sesion['page'] == 47) {
                    $comments = $this->Code->getQuestionSel($team, 'Ppchallenges');
                    $ambits = $this->Code->getAmbits();
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $this->set('ambits', $ambits);
                    $period = 120;
                    $session = $this->request->session();
                    $session->write('period', $period);
                    $this->set('time', '');
                    $q = $this->Code->getQuestionAmbit($team, 'Ppchallenges');

                    if (empty($q)) {
                        $this->viewBuilder()->template('page47b');
                    } else {
                        $this->set('challenges', $q);
                        $this->viewBuilder()->template('page47c');
                    }
                } else
                if ($sesion['page'] == 52) {
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $period = 60;
                    $session = $this->request->session();
                    $session->write('period', $period);
                    $this->set('time', '');
                    $this->set('stop', 1);
                    $idp = $sesion['ludico'];
                    $puzzle = $this->Code->getPuzzleId($idp);
                    $this->set('voted', $this->Code->hasVoted($team, 'puzz1'));

                    $this->set('puzzle', $puzzle);

                    $this->viewBuilder()->template('page52');
                } else
                if ($sesion['page'] == 53) {
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $period = 60;
                    $session = $this->request->session();
                    $session->write('period', $period);
                    $this->set('time', '');
                    $this->set('stop', 1);
                    $idp = $sesion['ludico'];
                    $puzzle = $this->Code->getPuzzleId($idp);
                    $this->set('voted', $this->Code->hasVoted($team, 'puzz2'));
                    $this->set('puzzle', $puzzle);
                    $this->viewBuilder()->template('page53');
                } else
                if ($sesion['page'] == 41) {
                    $period = $this->Code->getTime(2);
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('stop', 1);
                    $image = $this->Code->getImageId($sesion['ludico']);
                    $this->set('image', $image->name);

                    $session = $this->request->session();
                    $session->write('period', $period);
                    $this->set('time', '');
                    $this->viewBuilder()->template('page41b');
                } else
                if ($sesion['page'] > 1) {
                    if ($sesion['page'] == 9) {
                        $comments = $this->Code->getTeamComments($id);
                        $this->set('ranking', $comments);
                        $teams = $this->Code->getTeams($id);
                        $this->set('teams', $teams);
                    }
                    if ($sesion['page'] == 16) {
                        $url = $sesion['ludico'];
                        $this->set('url', $url);
                    }
                    if ($sesion['page'] == 29) {
                        $idp = $sesion['ludico'];
                        $practical = $this->Code->getPracticalId($idp);
                        $this->set('voted', $this->Code->hasVoted($team, 'prac'));
                        $this->set('practical', $practical);
                    }
                    if ($sesion['page'] == 21) {
                        $comments = $this->Code->getTeamQuestions($id);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 34) {
                        $comments = $this->Code->getTeamQuestions($id, 'stakes');
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 58) {
                        $comments = $this->Code->getTeamQuestions($id, 'motions');
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 67) {
                        $comments = $this->Code->getTopsOrder($id);
                        $quick = $this->Code->getTopsQuick($id);
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('ranking', $comments);
                        $this->set('quick', $quick);
                        $this->set('trouble', $sesion['trouble']);
                    }
                    if ($sesion['page'] == 68) {
                        $comments = $this->Code->getTopsOrder($id);
                        $retos = [];
                        foreach ($comments as $comment) {

                            $retos[$comment['ambit']][] = $comment['question'];
                        }

                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('retos', $retos);
                        $this->set('trouble', $sesion['trouble']);
                    }
                    if ($sesion['page'] == 69) {
                        $comments = $this->Code->getTopsOrder($id);
                        $retos = [];
                        foreach ($comments as $comment) {
                            if ($comment['qui'] >= $comment['nor'] && $comment['qui'] >= $comment['amb']) {
                                $retos[2][] = $comment['question'];
                            } else if ($comment['amb'] >= $comment['nor'] && $comment['amb'] >= $comment['nor']) {
                                $retos[0][] = $comment['question'];
                            } else {
                                $retos[1][] = $comment['question'];
                            }
                        }

                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('retos', $retos);
                        $this->set('trouble', $sesion['trouble']);
                    }
                    if ($sesion['page'] == 71) {
                        $teams = $this->Code->getTeams($id);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('teams', $teams);
                    }
                    if ($sesion['page'] == 45) {
                        $comments = $this->Code->getTeamQuestions($id, 'ppchallenges');
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 10) {
                        $this->set('id', $id);
                        $this->set('team', $team);
                        $num = $this->Code->getCommentsSel($team);

                        if ($num == 3) {
                            $template = 'page10b';

                            $comments = $this->Code->getCommentSel($team);
                            $this->set('comments', $comments);
                        } else {
                            $comments = $this->Code->getComment($team);
                            $this->set('comments', $comments);
                        }
                    }
                    if ($sesion['page'] == 22) {
                        $this->set('id', $id);
                        $this->set('team', $team);
                        $num = $this->Code->getQuestionsSel($team);

                        if ($num == 3) {
                            $template = 'page22b';

                            $comments = $this->Code->getQuestionSel($team);
                            $this->set('comments', $comments);
                        } else {
                            $comments = $this->Code->getQuestion($team);
                            $this->set('comments', $comments);
                        }
                    }
                    if ($sesion['page'] == 35) {
                        $this->set('id', $id);
                        $this->set('team', $team);
                        $num = $this->Code->getQuestionsSel($team, 'stakes');

                        if ($num == 3) {
                            $template = 'page35b';

                            $comments = $this->Code->getQuestionSel($team, 'Stakes');
                            $this->set('comments', $comments);
                        } else {
                            $comments = $this->Code->getQuestion($team, 'Stakes');
                            $this->set('comments', $comments);
                        }
                    }
                    if ($sesion['page'] == 59) {
                        $this->set('id', $id);
                        $this->set('team', $team);
                        $num = $this->Code->getQuestionsSel($team, 'motions');

                        if ($num == 3) {
                            $template = 'page59b';

                            $comments = $this->Code->getQuestionSel($team, 'Motions');
                            $this->set('comments', $comments);
                        } else {
                            $comments = $this->Code->getQuestion($team, 'Motions');
                            $this->set('comments', $comments);
                        }
                    }
                    if ($sesion['page'] == 46) {
                        $this->set('id', $id);
                        $this->set('team', $team);
                        $num = $this->Code->getQuestionsSel($team, 'ppchallenges');

                        if ($num == 3) {
                            $template = 'page46b';

                            $comments = $this->Code->getQuestionSel($team, 'Ppchallenges');
                            $this->set('comments', $comments);
                        } else {
                            $comments = $this->Code->getQuestion($team, 'Ppchallenges');
                            $this->set('comments', $comments);
                        }
                    }
                    if ($sesion['page'] == 12) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $retos = $this->Code->getRetos($id);
                        $propios = $this->Code->getGenericTeam($team);
                        $this->set('users', $this->Code->getTeamUsers($team));
                        $this->set('voted', $this->Code->hasVoted($team));
                        $this->set('propios', $propios);
                        $this->set('retos', $this->Code->orderRetos($retos, $propios));
                    }
                    if ($sesion['page'] == 13) {
                        $comments = $this->Code->getChallenges($id);
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 14 || $sesion['page'] == 17 || $sesion['page'] == 26 || $sesion['page'] == 30 || $sesion['page'] == 39 || $sesion['page'] == 42 || $sesion['page'] == 50 || $sesion['page'] == 54 || $sesion['page'] == 62 || $sesion['page'] == 70) {
                        $teams = $this->Code->getTeams($id);

                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('teams', $teams);
                    }
                    if ($sesion['page'] == 24) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $retos = $this->Code->getRetos($id, 'questions');
                        $this->set('users', $this->Code->getTeamUsers($team));
                        $this->set('voted', $this->Code->hasVoted($team, 'vq'));
                        $propios = $this->Code->getGenericTeam($team, 'Questions');
                        $this->set('propios', $propios);
                        $this->set('retos', $this->Code->orderRetos($retos, $propios));
                    }
                    if ($sesion['page'] == 37) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $retos = $this->Code->getRetos($id, 'stakes');
                        $this->set('users', $this->Code->getTeamUsers($team));
                        $this->set('voted', $this->Code->hasVoted($team, 'vs'));
                        $propios = $this->Code->getGenericTeam($team, 'Stakes');
                        $this->set('propios', $propios);
                        $this->set('retos', $this->Code->orderRetos($retos, $propios));
                    }
                    if ($sesion['page'] == 60) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $retos = $this->Code->getRetos($id, 'motions');
                        $this->set('retos', $retos);
                        $this->set('users', $this->Code->getTeamUsers($team));
                        $this->set('voted', $this->Code->hasVoted($team, 'vm'));
                        $propios = $this->Code->getGenericTeam($team, 'Motions');
                        $this->set('propios', $propios);
                        $this->set('retos', $this->Code->orderRetos($retos, $propios));
                    }
                    if ($sesion['page'] == 65) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('retos', $this->Code->getTopsAll($id));
                        $this->set('users', $this->Code->getTeamUsers($team));
                        $this->set('voted', $this->Code->hasVoted($team, 'vo'));
                    }
                    if ($sesion['page'] == 48) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $retos = $this->Code->getRetos($id, 'ppchallenges');

                        $this->set('users', $this->Code->getTeamUsers($team));
                        $this->set('voted', $this->Code->hasVoted($team, 'vp'));
                        $propios = $this->Code->getGenericTeam($team, 'Ppchallenges');
                        $this->set('propios', $propios);
                        $this->set('retos', $this->Code->orderRetos($retos, $propios));
                    }
                    if ($sesion['page'] == 25) {
                        $comments = $this->Code->getChallenges($id, 'questions');
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 38) {
                        $comments = $this->Code->getChallenges($id, 'stakes');
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 61) {
                        $comments = $this->Code->getChallenges($id, 'motions');
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 66) {
                        $comments = $this->Code->getTopsOrder($id);
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 49) {
                        $comments = $this->Code->getChallenges($id, 'ppchallenges');
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 56) {
                        $this->set('pos', $this->Code->getFeelings(1));
                        $this->set('neg', $this->Code->getFeelings(2));
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);

                        $ids = $this->Code->getGenericTeam($team, 'Motions');
                        $this->set('voted', count($ids) > 0);
                    }
                    if ($sesion['page'] == 64) {
                        $this->set('admin', $sesion['admin']);
                        $this->set('trouble', $sesion['trouble']);
                        $this->set('tops', $this->Code->getTopsAll($id));
                        $this->set('voted', $this->Code->hasVoted($team, 'vt'));
                    }
                    $this->viewBuilder()->template($template);
                }
            }
        } else {
            if (empty($sesion['page'])) {
                $this->Code->setPage($id, 1);
            } else {
                return $this->redirect(['action' => 'page' . $sesion['page']]);
            }
        }
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page1() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 1);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page2() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 2);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page3() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 3);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page4() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 4);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page5() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 5);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page6() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 6);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page7() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 7);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page8b() {
        $sesion = $this->Code->loadSesion();
    }

    public function page8() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 8);
        $this->set('stop', 1);
        $this->set('time', '');
        $session = $this->request->session();
        $period = 600;
        $session->write('period', $period);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page9() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->addTime($id, -600);
        $this->Code->setPage($id, 9);
        $comments = $this->Code->getTeamComments($id);
        $this->Code->setScore($id, 1, $this->Code->getOrder($comments));
        $comments = $this->Code->getTeamComments($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);

        $teams = $this->Code->getTeams($id);
        $this->set('teams', $teams);
    }

    public function page10() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->blabla($id, 'comments', 'comment');
        $this->Code->setPage($id, 10);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page11() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 11);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = 300;
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page11b() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            $retos = json_decode($datos['datos']);
            $team = $this->Code->getTeam();
            $this->Code->saveChallenges($team, $retos);
            $this->set('challenges', $retos);
            $ambits = $this->Code->getAmbits();
            $this->set('ambits', $ambits);
            $this->viewBuilder()->template('page11c');
        }
        return $this->redirect(
                        ['action' => 'index']
        );
    }

    public function page12() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 12);
        $this->Code->addTime($id, -600);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getRetos($id));
        $this->set('users', []);
        $this->set('propios', []);
    }

    public function page13() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 13);
        $ranking = $this->Code->getChallengeTeams($id);
        $this->Code->setScore($id, 2, $this->Code->getOrder($ranking, 'team_id'));
        $comments = $this->Code->getChallenges($id);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page14() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 14);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page15() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 15);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page151() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 151);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page16() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $video = $this->Code->getVideo($id);

        $this->Code->setPage($id, 16);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('url', $video['url']);
        $this->set('texto', $video['texto']);
        $this->set('solucion', $video['solucion']);
    }

    public function page17() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 17);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page18() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 18);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page19() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 19);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page20() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 20);
        $this->set('stop', 1);
        $this->set('time', '');
        $session = $this->request->session();
        $period = 600;
        $session->write('period', $period);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page21() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 21);
        $this->Code->addTime($id, -600);
        $comments = $this->Code->getTeamQuestions($id);
        $this->Code->setScore($id, 3, $this->Code->getOrder($comments));
        $comments = $this->Code->getTeamQuestions($id);
        $this->Code->blabla($id, 'questions', 'question');
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page22() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 22);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page23() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 23);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = $this->Code->getTime(2);
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page23b() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            $retos = json_decode($datos['datos']);
            $team = $this->Code->getTeam();
            $this->Code->saveQuestions($team, $retos);
        }
        return $this->redirect(
                        ['action' => 'index']
        );
    }

    public function page24() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 24);
        $this->Code->addTime($id, -600);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getRetos($id, 'questions'));
        $this->set('users', []);
        $this->set('propios', []);
    }

    public function page25() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 25);
        $ranking = $this->Code->getChallengeTeams($id, 'questions');
        $this->Code->setScore($id, 4, $this->Code->getOrder($ranking, 'team_id'));
        $comments = $this->Code->getChallenges($id, 'questions');
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page26() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 26);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page27() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 27);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page28() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 28);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page29() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $practical = $this->Code->getPractical($id);

        $this->Code->setPage($id, 29);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('practical', $practical);
    }

    public function page30() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 30);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page31() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 31);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page32() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 32);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page33() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 33);
        $this->set('stop', 1);
        $this->set('time', '');
        $session = $this->request->session();
        $period = 600;
        $session->write('period', $period);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page34() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 34);
        $this->Code->addTime($id, -600);
        $comments = $this->Code->getTeamQuestions($id, 'stakes');
        $this->Code->setScore($id, 5, $this->Code->getOrder($comments));
        $this->Code->blabla($id, 'stakes', 'question');
        $comments = $this->Code->getTeamQuestions($id, 'stakes');
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page35() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 35);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page36() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 36);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = $this->Code->getTime(2);
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page36b() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            $retos = json_decode($datos['datos']);
            $team = $this->Code->getTeam();
            $this->Code->saveQuestions($team, $retos, 'Stakes');
        }
        return $this->redirect(
                        ['action' => 'index']
        );
    }

    public function page37() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 37);
        $this->Code->addTime($id, -600);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getRetos($id, 'stakes'));
        $this->set('users', []);
        $this->set('propios', []);
    }

    public function page38() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 38);
        $ranking = $this->Code->getChallengeTeams($id, 'stakes');
        $this->Code->setScore($id, 6, $this->Code->getOrder($ranking, 'team_id'));
        $comments = $this->Code->getChallenges($id, 'stakes');
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page39() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 39);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page40() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 40);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page401() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 401);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page41() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 41);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = $this->Code->getTime(2);

        $session->write('period', $period);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
            $image = $this->Code->getImageId($sesion['ludico']);
        } else {
            $image = $this->Code->getImage($id);
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('image', $image->name);
    }

    public function page42() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 42);
        $this->Code->addTime($id, -600);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page43() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 43);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page430() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 430);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page44() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 44);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = $this->Code->getTime();
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page45() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 45);
        $this->Code->addTime($id, -600);
        $comments = $this->Code->getTeamQuestions($id, 'ppchallenges');
        $this->Code->setScore($id, 7, $this->Code->getOrder($comments));
        $this->Code->blabla($id, 'ppchallenges', 'question');
        $comments = $this->Code->getTeamQuestions($id, 'ppchallenges');
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page46() {
        $sesion = $this->Code->loadSesion();

        $id = $sesion['id'];
        $this->Code->setPage($id, 46);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page47() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 47);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = $this->Code->getTime(2);
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page47b() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            $retos = json_decode($datos['datos']);
            $team = $this->Code->getTeam();
            $this->Code->saveQuestions($team, $retos, 'Ppchallenges');
        }
        return $this->redirect(
                        ['action' => 'index']
        );
    }

    public function page48() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 48);
        $this->Code->addTime($id, -600);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getRetos($id, 'ppchallenges'));
        $this->set('users', []);
        $this->set('propios', []);
    }

    public function page49() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 49);
        $ranking = $this->Code->getChallengeTeams($id, 'ppchallenges');
        $this->Code->setScore($id, 8, $this->Code->getOrder($ranking, 'team_id'));
        $comments = $this->Code->getChallenges($id, 'ppchallenges');
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page50() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 50);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page51() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 51);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page511() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 511);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page52() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();


        $id = $sesion['id'];
        $this->Code->setPage($id, 52);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = 60;
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
            $idp = $sesion['ludico'];
            $puzzle = $this->Code->getPuzzleId($idp);
        } else {
            $this->Code->setTime($id);
            $puzzle = $this->Code->getPuzzle($id);
        }

        $this->set('puzzle', $puzzle);

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page53() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 53);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = 60;
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
            $idp = $sesion['ludico'];
            $puzzle = $this->Code->getPuzzleId($idp);
        } else {
            $this->Code->setTime($id);
            $puzzle = $this->Code->getPuzzle($id);
        }

        $this->set('puzzle', $puzzle);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page54() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 54);
        $this->Code->addTime($id, -600);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page55() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 55);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page56() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 56);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('pos', $this->Code->getFeelings(1));
        $this->set('neg', $this->Code->getFeelings(2));
    }

    public function page57() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 57);
        $this->set('stop', 1);
        $this->set('time', '');
        $session = $this->request->session();
        $period = 300;
        $session->write('period', $period);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page58() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 58);
        $this->Code->addTime($id, -600);
        $comments = $this->Code->getTeamQuestions($id, 'motions');
        $this->Code->setScore($id, 9, $this->Code->getOrder($comments));
        $comments = $this->Code->getTeamQuestions($id, 'motions');
        $this->Code->blabla($id, 'motions', 'question');
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page59() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 59);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page60() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 60);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->Code->blablaExists($id, 'motions', 'question');

        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getRetos($id, 'motions'));
        $this->set('users', []);
        $this->set('propios', []);
    }

    public function page61() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 61);
        $ranking = $this->Code->getChallengeTeams($id, 'motions');
        $this->Code->setScore($id, 10, $this->Code->getOrder($ranking, 'team_id'));
        $comments = $this->Code->getChallenges($id, 'motions');
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page62() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 62);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page63() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 63);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page64() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 64);
        $this->Code->createTops($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('tops', $this->Code->getTopsAll($id));
    }

    public function page65() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 65);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getTopsAll($id));
        $this->set('users', []);
    }

    public function page66() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 66);
        $comments = $this->Code->getTopsOrder($id);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
    }

    public function page67() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 67);
        $comments = $this->Code->getTopsOrder($id);
        $quick = $this->Code->getTopsQuick($id);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('ranking', $comments);
        $this->set('quick', $quick);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page68() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 68);
        $comments = $this->Code->getTopsOrder($id);
        $retos = [];
        foreach ($comments as $comment) {

            $retos[$comment['ambit']][] = $comment['question'];
        }

        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('retos', $retos);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page69() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 69);
        $comments = $this->Code->getTopsOrder($id);
        $retos = [];
        foreach ($comments as $comment) {
            if ($comment['qui'] >= $comment['nor'] && $comment['qui'] >= $comment['amb']) {
                $retos[2][] = $comment['question'];
            } else if ($comment['amb'] >= $comment['nor'] && $comment['amb'] >= $comment['nor']) {
                $retos[0][] = $comment['question'];
            } else {
                $retos[1][] = $comment['question'];
            }
        }

        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('retos', $retos);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page70() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 70);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function page71() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 71);
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
        $this->set('teams', $teams);
    }

    public function selectteam() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $active = $sesion['active'];
        $data = $this->Code->teamsOK($id);
        if ($data == 0 || !$active) {
            $this->loadModel('Teams');
            if ($this->request->is(['patch', 'post', 'put'])) {
                $idteam = $this->Cookie->read('team');
                $datos = $this->request->getData();

                if (!empty($idteam)) {
                    $teams = $this->Teams->find('all')
                            ->where(['id' => $idteam]);

                    $team = $teams->first();
                    if ($team) {
                        $team = $this->Teams->get($idteam);
                        $team->taken = 0;
                        $this->Teams->save($team);
                    }
                }
                if (!empty($datos['team'])) {
                    $query = $this->Teams->find('all')
                            ->where(['game_id' => $sesion['id'], 'team' => $datos['team']]);
                    $team = $query->first();
                    $team->taken = 1;
                    $this->Teams->save($team);
                } else {
                    if (isset($datos['name']) && !empty($datos['member'])) {
                        $names = json_decode($datos['names']);
                        $query = $this->Teams->find('all')
                                ->where(['game_id' => $id, 'name' => $names[$datos['name']]]);
                        if ($query->count() == 0) {

                            $team = $this->Teams->newEntity();
                            $team->name = $names[$datos['name']];
                            $team->members = $datos['member'];
                            $team->taken = 1;
                            $team->bikles = 20;
                            $team->team = $this->Code->getMaxTeam($id);
                            $team->game_id = $id;
                            $this->Teams->save($team);
                        } else {
                            return $this->redirect(['action' => 'selectteam']);
                        }
                    }
                }
                $this->Cookie->write('team', $team->id);
            }
            $query = $this->Teams->find()
                            ->where(['game_id' => $sesion['id']])
                            ->order(['team' => 'ASC'])->toArray();
            $names = $this->Code->getFreeNames($id);
            $this->set('teams', $query);
            $this->set('names', $names);
        } else {
            if ($active && $data == 1) {
                return $this->redirect(['action' => 'taken']);
            } else {
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function taken() {
        
    }

    public function teamsok() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        if ($this->request->is('ajax')) {
            $data = $this->Code->teamsOK($sesion['id']) && $sesion['active'];
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function pageactive() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        if ($this->request->is('ajax')) {
            $data = $sesion['page'];
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addcomment() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $datos = $this->request->query;

        $data = $this->Code->addcomment($this->Code->getTeam(), $datos['comment']);
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deletecomment() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletecomment($this->Code->getTeam(), $datos['id']);
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function selectcomment() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->selectcomment($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addquestion() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        $data = $this->Code->addquestion($this->Code->getTeam(), $datos['comment']);
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deletequestion() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletequestion($this->Code->getTeam(), $datos['id']);
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addstake() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        $data = $this->Code->addquestion($this->Code->getTeam(), $datos['comment'], 'Stakes');
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addinter() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        $data = $this->Code->addquestion($this->Code->getTeam(), $datos['comment'], 'Interactions');
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addmotions() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        $data = $this->Code->addquestion($this->Code->getTeam(), $datos['comment'], 'Motions');
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addpain() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        $data = $this->Code->addpain($this->Code->getTeam(), $datos['comment'], $datos['inter_id']);
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addppcha() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        $data = $this->Code->addppcha($this->Code->getTeam(), $datos['comment'], $datos['inter_id']);
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deletestake() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletequestion($this->Code->getTeam(), $datos['id'], 'Stakes');
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deletemotion() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletequestion($this->Code->getTeam(), $datos['id'], 'Motions');
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deletepain() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletequestion($this->Code->getTeam(), $datos['id'], 'Painpoints');
            $data = $this->Code->deleteAll($this->Code->getTeam(), 'Ppchallenges', 'painpoint_id', $datos['id']);
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deleteppcha() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletequestion($this->Code->getTeam(), $datos['id'], 'Ppchallenges');
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deleteinter() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deleteinter($this->Code->getTeam(), $datos['id']);
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function selectquestion() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->selectquestion($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function selectstake() {

        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->selectquestion($this->Code->getTeam(), json_decode($datos['ids']), 'Stakes');

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function selectmotion() {

        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->selectquestion($this->Code->getTeam(), json_decode($datos['ids']), 'Motions');

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function selectppcha() {

        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->selectquestion($this->Code->getTeam(), json_decode($datos['ids']), 'Ppchallenges');

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function saveretovotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveretovotos($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savequestionvotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveQuestionVotes($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savestakesvotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveQuestionVotes($this->Code->getTeam(), json_decode($datos['ids']), 'Stakes', 'vs');

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savemotionvotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveQuestionVotes($this->Code->getTeam(), json_decode($datos['ids']), 'Motions', 'vm');

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savetopvotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveTopVotes($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savetopuservotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveTopUserVotes($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function saveppchanvotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveQuestionVotes($this->Code->getTeam(), json_decode($datos['ids']), 'Ppchallenges', 'vp');

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savefeelings() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveFeelings($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savepractical() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->savePractical($this->Code->getTeam(), $datos['bikles']);

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savepuzzle() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->savePuzzle($sesion['id'], $this->Code->getTeam(), $datos['bikles'], $datos['puzzle']);

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function savemotions() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveMotions($this->Code->getTeam(), json_decode($datos['datos']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function checkvote() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->checkVote($sesion['id'], $datos['table']);

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function checkvoteteam() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->checkVoteTeam($sesion['id'], $datos['field']);

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function gettime() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();

        $period = $session->read('period');
        if (empty($period)) {
            $period = 600;
        }

        $data = 0;
        if ($this->request->is('ajax')) {
            if (!empty($sesion['time1'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(null, false); //$time->diff($time2,1)->format('%i:%s');
                if ($sec > 0) {
                    $data = gmdate("i:s", $sec);
                } else {
                    $data = "00:00";
                }
            } else {
                $data = "0";
            }
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

}
