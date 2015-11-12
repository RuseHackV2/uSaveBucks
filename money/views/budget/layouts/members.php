<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blogindex
 *
 * @author v_velikov
 */

namespace Controllers;

class members extends \GF\DefaultController {

    public function getMambers($membersData, $budgetData) {
        echo "<br />";
        echo "Членове в " . $budgetData['link'] . " :";
        foreach ($membersData as $key => $value) {
            $member = $value['user_id'];
            $member = $this->db->prepare("SELECT * FROM users WHERE user_id=?", array($member))->execute()->fetchAllAssoc();
            foreach ($member as $key => $value) {
                echo "<br />";
                echo "• " . $value['username'];
                if ($value['user_id'] == $budgetData['master_id']) {
                    if ($this->app->getSession()->user_id == $budgetData['master_id']) {
                        echo " (<b style=\"color: red\">You are the master</b>)";
                    } else {
                        echo " (<b style=\"color: red\">master</b>)";
                    }
                }
            }
        }
    }
}
$members = new members();
$members->getMambers($this->membersData, $this->budgetData);
?>
<br/><br/>

Добави потребител към бюджета:
<form action="<?php echo $this->budgetData[link]; ?>/update/budgetmembers" method="post">
    Потребител: <br />
    <input type="text" name="member"/> <br />
    <br />
    <button type="submit" name="update" value="budgetmembers">Добави</button>
</form>

