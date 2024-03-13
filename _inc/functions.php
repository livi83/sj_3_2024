
<?php
/**
 * Generuje odkazy na CSS súbory pre hlavičku stránky
 *
 * Táto funkcia generuje odkazy na základné CSS súbory a pridáva odkazy na špecifické
 * CSS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené priamo do hlavičky HTML.
 *
 * @return void
 */
function add_styles() {
    echo '<link rel="stylesheet" href="css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
    switch($page_name){
        case 'index':
            echo '<link rel="stylesheet" href="css/slider.css">';
            break;
        case 'kontakt':
            echo '<link rel="stylesheet" href="css/banner.css">';
            echo '<link rel="stylesheet" href="css/form.css">';
            break;
        case 'portfolio':
            echo '<link rel="stylesheet" href="css/portfolio.css">';
            echo '<link rel="stylesheet" href="css/banner.css">';
            break;
			case 'qna':
				echo '<link rel="stylesheet" href="css/accordion.css">';
				echo '<link rel="stylesheet" href="css/banner.css">';
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
    echo('<script src="js/menu.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'index':
        echo('<script src="js/slider.js"></script>');
        break;
    case 'qna':
        echo('<script src="js/accordion.js"></script>');
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

function generate_menu(array $pages) {
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
    $img_files = glob($img_folder . '*.jpg');
    $heading_count = count($headings);
    for ($i = 0; $i < count($img_files); $i++) {
        echo('<div class="slide fade">');
        echo('<img src="'.$img_files[$i].'">');
        echo('<div class="slide-text">');
        if ($heading_count == count($img_files)) {
            echo($headings[$i]);
        } else {
            if ($i < $heading_count) {
                echo($headings[$i]);
            }
        }
        echo('</div>');
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
    $col_class = round(100/$n_cols); // Výpočet šírky stĺpca na základe počtu stĺpcov

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

?>