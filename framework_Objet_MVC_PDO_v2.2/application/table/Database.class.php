<?php
class Database
{

    static public function creer(string $sqlfile): string
    {
        $sql = file_get_contents($sqlfile);
        Table::$link->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
        Table::$link->exec($sql);
        return $sql;
    }

    static public function dataset()
    {
        require "../vendor/autoload.php";
        $faker = Faker\Factory::create('fr_FR');
        //Database:: setFaker($faker); 
        $message = "";

        $nbhotels = 50;
        $nblits = 5;
        $nbclasses = 5;
        $nbcategories = 4;
        $nbservices = 12;
        $nbchambres = 500;


        //Generation des Utilisateurs              
        $nbdepartement = 106;
        $nbclients = 25;
        $nbgerants = $nbhotels;
        $nbsrc = 10;
        $nbadmins = 2;

        $o = new Utilisateurs();
        $row = [];
        $row["uti_id"] = 0;

        for ($i = 0; $i < $nbclients; $i++) {
            $row["uti_nom"] = $faker->lastName;
            $row["uti_prenom"] = $faker->firstName();
            $row["uti_email"] = $faker->email();
            $row["uti_mdp"] = password_hash("mdp", PASSWORD_DEFAULT);
            $row["uti_profil"] = 1;
            $row["uti_agence"] = null;
            $o->save($row);
        }

        for ($i = 1; $i < $nbgerants; $i++) {
            // $a = ceil($i / 2);
            $row["uti_nom"] = $faker->lastName;
            $row["uti_prenom"] = $faker->firstName;
            $row["uti_email"] = $faker->email;
            $row["uti_mdp"] = password_hash("mdp", PASSWORD_DEFAULT);
            $row["uti_profil"] = 2;
            $o->save($row);
        }

        for ($i = 0; $i < $nbsrc; $i++) {
            $row["uti_nom"] = $faker->lastName;
            $row["uti_prenom"] = $faker->firstName;
            $row["uti_email"] = $faker->email;
            $row["uti_mdp"] = password_hash("mdp", PASSWORD_DEFAULT);
            $row["uti_profil"] = 3;
            $o->save($row);
        }

        for ($i = 0; $i < $nbadmins; $i++) {
            $row["uti_nom"] = "admin$i";
            $row["uti_prenom"] = "admin$i";
            $row["uti_email"] = "admin$i@user";
            $row["uti_mdp"] = password_hash("mdp", PASSWORD_DEFAULT);
            $row["uti_profil"] = 4;
            $o->save($row);
        }
        $message .= "<p>Génération de $nbclients clients + $nbgerants gestionnaires + $nbsrc SRC + $nbadmins admin</p>";
        //Generation des hotels
        $listeDeps = [];
        $nbmin = mt_rand(1, $nbdepartement - 50);
        for ($i = 0; $i < $nbhotels; $i++) {
            $listeDeps[] = $nbmin + $i;
        }

        $o = new Hotels();
        $row = [];
        $row["hot_id"] = 0;
        for ($i = 0; $i < $nbhotels; $i++) {
            $row["hot_classe"] = mt_rand(1, $nbclasses);
            $row["hot_nom"] = "hotels $i";
            $row["hot_adresse"] = "adresse $i";
            $row["hot_departement"] = $listeDeps[$i];
            $row["hot_tel"] = $faker->phoneNumber();
            $row["hot_gerant"] = mt_rand($nbclients + 1, $nbclients + $nbgerants + $nbsrc);
            $o->save($row);
        }
        $message .= "<p>Génération des 50 hotels</p>";

        //Genration des chambres
        $o = new Chambres();
        $row = [];
        $row["cha_id"] = 0;
        for ($i = 0; $i < $nbchambres; $i++) {
            $row["cha_description"] = "description$i";
            $row["cha_categorie"] = mt_rand(1, $nbcategories);
            $row["cha_surface"] = mt_rand(4, 48);
            $row["cha_lit"] = mt_rand(1, $nblits);
            $row["cha_jacouzzi"] = mt_rand(0, 1);
            $row["cha_balcon"] = mt_rand(0, 1);
            $row["cha_wifi"] = mt_rand(0, 1);
            $row["cha_minibar"] = mt_rand(0, 1);
            $row["cha_coffre"] = mt_rand(0, 1);
            $o->save($row);
        }
        //Génération des Reservation 
        $o = new Reservations();
        $row = [];
        $row["res_id"] = 0;
        $nbreservations = $nbclients * 2;
        for ($i = 1; $i <= $nbreservations; $i++) {
            $row["res_client"] = mt_rand(1, $nbclients);
            $ts = mktime(12, 0, 0, mt_rand(1, 12), mt_rand(1, 31), 2022);
            $row["res_date_creation"] = date("Y-m-d H:i:s", $ts);
            $ts += mt_rand(1, 24) * 60 * 60;
            $row["res_update"] = date("Y-m-d H:i:s", $ts);
            $ts += mt_rand(1, 3) * mt_rand(1, 24) * 60 * 60;
            $row["res_date_debut"] = date("Y-m-d H:i:s", $ts);
            $ts +=  mt_rand(1, 4) * 60 * 60 * 24;
            $row["res_date_fin"] = date("Y-m-d H:i:s", $ts);
            $row["res_hotel"] = mt_rand(1, $nbhotels);
            $row["res_chambre"] = mt_rand(1, $nbchambres);
            $row["res_gestionnaire"] = mt_rand($nbclients + $nbgerants + 1, $nbclients + $nbgerants + $nbsrc);
            $row["res_statut"] = mt_rand(1, 4);
            $o->save($row);
        }

        $message .= "<p>Génération de $nbreservations reservations </p>";

        //Genration de Offre
        $o = new Offre();
        $listeIndexServices = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        $row = [];
        $row["off_id"] = 0;
        for ($i = 1; $i <= $nbhotels; $i++) {
            $nbservice = mt_rand(0, 11);
            if ($nbservice > 0) {
                shuffle($listeIndexServices);
                for ($j = 0; $j <= $nbservice; $j++) {
                    $row["off_services"] = $listeIndexServices[$j];
                    $row["off_hotel"] = $i;
                    if ($listeIndexServices[$j] < 7)
                        $row['off_prix'] = 0;
                    else
                        $row['off_prix'] = mt_rand(10, 40) + 0.5;
                    $o->save($row);
                }
            }
        }

        $message .= "<p>Génération de offre </p>";

        //Génération de Choisir
        $o = new Choisir();
        $row = [];
        $row["cho_id"] = 0;
        $resa = Table::$link->query("SELECT * FROM reservations");
        foreach ($resa as $r) {
            extract($r);
            $sql = "SELECT ser_id FROM  hotels, services, offre where  off_hotel=hot_id and off_services=ser_id and hot_id=$res_hotel";
            $result = Table::$link->query($sql);
            $result->fetchAll();
            $count = $result->rowCount();

            if ($count > 0) {
                for ($j = 0; $j <= $count - mt_rand(1, $count / 2); $j++) {
                    $row["cho_services"] = $j;
                    $row["cho_reservation"] = $res_id;
                    $row["cho_quantite"]=mt_rand(0, 3); 
                    $o->save($row);
                }
            }
        }


        //Génération de tarif 
        $o = new Tarif();
        $row = [];
        $row["tar_id"] = 0;
        $data = array(
            1 => array(1 => 50,  2 => 60,  3 => 70,   4 => 80),
            2 => array(1 => 70,  2 => 80,  3 => 90,   4 => 100),
            3 => array(1 => 85,  2 => 110, 3 => 150,  4 => 200),
            4 => array(1 => 120, 2 => 230, 3 => 999,  4 => 1500),
            5 => array(1 => 0,   2 => 0,   3 => 1200, 4 => 2100)
        );
        for ($i = 1; $i <= $nbclasses; $i++) {
            for ($j = 1; $j <= $nbcategorie; $j++) {
                $prix = $data[$i][$j];
                // $tab[] = "('','$i','$j','$prix')";
                $row["tar_classe"] = "$i";
                $row["tar_categorie"] = "$j";
                $row["tar_prix"] = "$prix";
                $o->save($row);
            }

            $message .= "<p>Génération des tarifs </p>";

            return $message;
        }
    }
}
