<?php
header('Content-Type: application/json');

$texte = "Select a card to see its description.";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'Quick_sketch':
            $texte = "2- \n The Quick Sketch allows you to make a fast drawing to visualize an idea.";
            
            break;

        case 'Page_breakdown':
            $texte = "3- \n The Page Breakdown details the structure and content of a page.";
            break;

        case 'Block_placement':
            $texte = "4- \n Block placement helps organize the visual elements of the page.";
            break;
            
        case 'Adding_columns':
            $texte = "5- \n Add columns to create a more structured layout.";
            break;

        case 'Adding_buttons':
            $texte = "6- \n Adding buttons and links makes the interface interactive.";
            break;

        case 'Adding_placeholder_images':
            $texte = "7- \n Add placeholder images to visualize the layout.";
            break;

        case 'Simple_text':
            $texte = "8- \n Simple text and headings structure the information.";
            break;

        case 'Information_organization':
            $texte = "9- \n Organizing information makes the page clearer and easier to understand.";
            break;

        case 'Mobile_version':
            $texte = "10- \n The mobile version ensures a responsive design adapted to smartphones.";
            break;

        case 'Clean_alignments':
            $texte = "J- \n Clean alignments and spacing offer a more polished result.";
            break;

        case 'Click_path':
            $texte = "Q- \n The click path represents the user journey between pages.";
            break;

        case 'Realistic_mockup':
            $texte = "K- \n A realistic mockup provides a better visualization of the final product.";
            break;

        case 'Simple_prototype':
            $texte = "A- \n A simple prototype allows quick interaction testing.";
            break;

        case 'Joker_1':
            $texte = "Joker 1: usable once to gain a design advantage.";
            break;

        case 'Joker_2':
            $texte = "Joker 2: another special card depending on your rules.";
            break;

        case 'Joker_3':
            $texte = "Joker 3: the last joker available during the game.";
            break;

        default:
            $texte = "Undefined text.";
    }
}

echo json_encode(['texte' => $texte]);
