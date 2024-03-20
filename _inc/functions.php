
<?php
require_once('config.php');

/**
 * Generuje odkazy na CSS súbory pre hlavičku stránky
 *
 * Táto funkcia generuje odkazy na základné CSS súbory a pridáva odkazy na špecifické
 * CSS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené priamo do hlavičky HTML.
 *
 * @return void
 */
function add_stylesheet() {
    echo '<link rel="stylesheet" href="../assets/css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
    
    switch($page_name){
        case 'home':
            echo '<link rel="stylesheet" href="../assets/css/slider.css">';
            break;
        case 'kontakt':
            echo '<link rel="stylesheet" href="../assets/css/banner.css">';
            echo '<link rel="stylesheet" href="../assets/css/form.css">';
            break;
        case 'portfolio':
            echo '<link rel="stylesheet" href="../assets/css/portfolio.css">';
            echo '<link rel="stylesheet" href="../assets/css/banner.css">';
            break;
        case 'qna':
            echo '<link rel="stylesheet" href="../assets/css/accordion.css">';
            echo '<link rel="stylesheet" href="../assets/css/banner.css">';
            break;
        case 'thankyou':
            echo '<link rel="stylesheet" href="../assets/css/banner.css">';
            break;
    }
}
    /**
 * Generuje odkazy na JS súbory pre pätu stránky
 *
 * Táto funkcia generuje odkazy na základné JS súbory a pridáva odkazy na špecifické
 * JS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené na koniec body tagu.
 *
 * @return void
 */
function add_scripts(){
    echo('<script src="../assets/js/menu.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'home':
        echo('<script src="../assets/js/slider.js"></script>');
        break;
    case 'qna':
        echo('<script src="../assets/js/accordion.js"></script>');
        break;  
    }
    
}

/**
 * Generuje navigačné menu zadaného zoznamu stránok a ich URL adries
 *
 * Táto funkcia prijíma zoznam stránok a príslušných URL adries vo forme asociatívneho poľa
 * a generuje navigačné menu vo forme HTML zoznamu. Každá položka menu je reprezentovaná ako
 * odkaz na príslušnú stránku s príslušným názvom.
 *
 * @param array $pages Asociatívne pole stránok a ich URL adries
 * @return string HTML kód pre navigačné menu
 */

function generate_menu(array $pages): string{
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
    
    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

/**
 * Generuje HTML kód pre posuvníkové snímky s obrázkami a nadpisami.
 *
 * @param array $headings Pole s nadpismi pre jednotlivé snímky
 * @param string $img_folder Cesta k adresáru so súbormi obrázkov
 * @return void
 */

function generate_slides(array $headings, string $img_folder) {
    echo('<section class="slides-container">');
    // Získanie zoznamu súborov obrázkov v adresári
    $img_files = glob($img_folder . '*.jpg');
    
    // Kontrola počtu nadpisov
    $heading_count = count($headings);
    
    // Prechádza cez každý obrázok
    for ($i = 0; $i < count($img_files); $i++) {
        // Začiatok divu pre snímku
        echo('<div class="slide fade">');
        
        // Vloženie obrázka
        echo('<img src="'.$img_files[$i].'">');
        
        // Začiatok divu pre text snímky
        echo('<div class="slide-text">');
        
        // Podmienka pre výpis nadpisu
        if ($heading_count == count($img_files)) {
            // Vypíše i-ty nadpis, ak je ich dostatok
            echo($headings[$i]);
        } else {
            // Inak vypíše nadpis len ak sme mimo rozsahu poľa
            if ($i < $heading_count) {
                echo($headings[$i]);
            }
        }
        
        // Koniec divu pre text snímky
        echo('</div>');
        
        // Koniec divu pre snímku
        echo('</div>');
    }
    echo('<a id="prev" class="prev">❮</a>
    <a id="next" class="next">❯</a>
    </section>');
}

/**
 * Generuje mriežku portfólia s určeným počtom riadkov a stĺpcov.
 *
 * Táto funkcia generuje mriežku portfólia so zadaným počtom riadkov a stĺpcov.
 * Každý riadok obsahuje stĺpce s portfóliovými položkami, ktoré sú reprezentované
 * ako HTML elementy s identifikátorom a textom obsahujúcim poradové číslo.
 *
 * @param int $n_rows Počet riadkov v mriežke portfólia
 * @param int $n_cols Počet stĺpcov v mriežke portfólia
 * @return void
 */
function generate_portfolio(int $n_rows, int $n_cols){
    $n_portfolio = 1; // Počiatočná hodnota pre poradové číslo portfólia
    $col_class = 100/$n_cols; // Výpočet šírky stĺpca na základe počtu stĺpcov

    // Prechádza cez každý riadok v mriežke portfólia
    for($i = 0; $i < $n_rows; $i++){
        echo('<div class="row">'); // Začiatok riadku

        // Pre každý stĺpec v aktuálnom riadku
        for($j = 0; $j < $n_cols; $j++){
            // Vytvára HTML element pre portfóliovú položku s identifikátorom a textom
            echo('<div class="col-'.$col_class.' portfolio text-white text-center" id="portfolio-'.$n_portfolio.'">');
            echo('Web stránka '.$n_portfolio); // Text portfóliovej položky
            $n_portfolio++; // Inkrementuje poradové číslo portfólia
            echo('</div>'); // Ukončuje portfóliovú položku
        }

        echo('</div>'); // Ukončuje riadok
    }
}

function generate_qna(array $qna){
    foreach($qna as $question=>$answer){
        echo('<div class="accordion">');
        echo('<div class="question">'.$question.'</div>');
        echo('<div class="answer">'.$answer.'</div>');
        echo('</div>');
    }
}

function redirect_homepage(){
    header("Location: templates/home.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}

function db_connection(){
    try {
        //$pdo = new PDO('mysql:host=localhost;dbname=vaša_databáza', 'vaše_používateľské_meno', 'vaše_heslo');
        $connection = new PDO("mysql:host=" . DATABASE['HOST'] . ";dbname=" . DATABASE['DBNAME'] . ";charset=utf8", 
                              DATABASE['USER_NAME'], 
                              DATABASE['PASSWORD']);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $connection;
    }catch(PDOException $e){
        return 0;
        die("Chyba pripojenia k databáze: " . $e->getMessage());
    }
}

?>