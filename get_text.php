<?php
header('Content-Type: application/json');

$texte = "Select a card to see its description.";
$image = "image/cards/carte_test.png";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Quick_sketch':
            $texte = "2- The Quick Sketch allows you to quickly draw ideas to visualize concepts. It's a simple and fast way to start your wireframe journey.";
            $image = "image/cards/carte_2.svg";
            break;
        case 'Page_breakdown':
            $texte = "3- The Page Breakdown details the structure and content of a page. Here you organize headers, footers, and main sections.";
            $image = "image/cards/carte_3.svg";
            break;
        case 'Block_placement':
            $texte = "4- Block Placement helps you arrange visual elements logically. Think of it as placing pieces of content in their right spot.";
            $image = "image/cards/carte_4.svg";
            break;
        case 'Adding_columns':
            $texte = "5- Adding Columns creates a structured layout. This allows text and images to align neatly and improves readability.";
            $image = "image/cards/carte_5.svg";
            break;
        case 'Adding_buttons':
            $texte = "6- Adding Buttons and Links makes your wireframe interactive. You can plan user actions and navigation between pages.";
            $image = "image/cards/carte_6.svg";
            break;
        case 'Adding_placeholder_images':
            $texte = "7- Placeholder Images give a visual idea of content placement. They help you plan where images will appear without using final graphics.";
            $image = "image/cards/carte_7.svg";
            break;
        case 'Simple_text':
            $texte = "8- Simple Text and Headings structure information. Focus on clarity and hierarchy to guide users through your page.";
            $image = "image/cards/carte_8.svg";
            break;
        case 'Information_organization':
            $texte = "9- Organizing Information makes your page easier to understand. Group related content and prioritize important elements.";
            $image = "image/cards/carte_9.svg";
            break;
        case 'Mobile_version':
            $texte = "10- The Mobile Version ensures your wireframe works on smartphones. Plan for smaller screens and touch interactions.";
            $image = "image/cards/carte_10.svg";
            break;
        case 'Clean_alignments':
            $texte = "J- Clean Alignments and Spacing make your design polished. Proper spacing guides the eye and improves readability.";
            $image = "image/cards/carte_j.svg";
            break;
        case 'Click_path':
            $texte = "Q- The Click Path represents the user's journey between pages. It helps anticipate user actions and navigation.";
            $image = "image/cards/carte_q.svg";
            break;
        case 'Realistic_mockup':
            $texte = "K- A Realistic Mockup shows the final look of your design. It helps you visualize how all elements come together.";
            $image = "image/cards/carte_k.svg";
            break;
        case 'Simple_prototype':
            $texte = "A- A Simple Prototype allows quick interaction testing. You can check navigation flow before final design.";
            $image = "image/cards/carte_1.svg";
            break;
        case 'Power_up1':
            $texte = "Allows the player to take a random card from an opponent's stack.";
            $image = "image/cards/carte_p1.svg";
            break;
        case 'Power_up2':
            $texte = "Allows the player to swap their entire deck (card stack) with another player's.";
            $image = "image/cards/carte_p2.svg";
            break;
        case 'Power_up3':
            $texte = "Doubles the value of the card player by calculating the trick's winner.";
            $image = "image/cards/carte_p3.svg";
            break;
            
            case 'Power_up4':
            $texte = "Allows the player to play two cards in one turn and add their scores for the trick.";
            $image = "image/cards/carte_p4.svg";
            break;
        
        case 'Joker':
            $texte = "When placed, allow the player to win the trick, and to take a Power-up card.";
            $image = "image/cards/carte_joker.svg";
            break;

            default:
            $texte = "Undefined text.";
            $image = "image/cards/carte_test.png";
    }
}

echo json_encode(['texte' => $texte, 'image' => $image]);
?>
