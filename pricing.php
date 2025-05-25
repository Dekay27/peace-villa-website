<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peace Villa Rentals - Price List</title>
    <!-- Bootstrap 5 CSS (required) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS for Green/Gold/Wine Theme -->
    <style>
        :root {
            --primary-green: #28a745;
            --gold: #ffd700;
            --wine: #2e2c2c;
        }
        body {
            background-color: #f8f9fa;
        }
        .accordion-button {
            background-color: var(--primary-green);
            color: white;
            font-weight: 500;
        }
        .accordion-button.collapsed {
            background-color: #e9ecef;
            color: var(--wine);
        }
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        .accordion-button.collapsed::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23800020'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        .btn-primary {
            background-color: #28a790;
            border-color: #28a790;
        }
        .btn-primary:hover {
            background-color: var(--primary-green);
            border-color: #28a790;
        }
        .list-group-item {
            background-color: #ffffff;
            border-color: #dee2e6;
        }
        .list-group-item .fw-bold {
            color: var(--wine);
        }
        .bg-light {
            background-color: #f1f8f1; /* Light green tint for a festive feel */
        }
        h1 {
            color: var(--primary-green);
        }
    </style>
</head>
<body>

<!-- Bootstrap Container -->
<div class="container py-5">
    <h1 class="text-center mb-4">Peace Villa Rentals - Pricing</h1>

    <!-- Add more accordion items for Furniture, Catering, etc. -->
    <section class="py-5 bg-light">
        <div class="container">
            <p class="text-center mb-4">All prices are quoted in Ghana Cedis (GHS). Contact us for more details!</p>
            <div class="accordion" id="pricingAccordion">
                <!-- Venue Rentals -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingVenue">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVenue" aria-expanded="true" aria-controls="collapseVenue">
                            Venue Rentals
                        </button>
                    </h2>
                    <div id="collapseVenue" class="accordion-collapse collapse show" aria-labelledby="headingVenue" data-bs-parent="#pricingAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pergola Wooden Canopy <span class="fw-bold">500.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cheese Tent <span class="fw-bold">500.00 & 800.00 (200-300 capacity)</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Marquees <span class="fw-bold">70.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    White Canopy <span class="fw-bold">40.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Coloured Canopy <span class="fw-bold">35.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Furniture and Equipment -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFurniture">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFurniture" aria-expanded="false" aria-controls="collapseFurniture">
                            Furniture and Equipment
                        </button>
                    </h2>
                    <div id="collapseFurniture" class="accordion-collapse collapse" aria-labelledby="headingFurniture" data-bs-parent="#pricingAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Tables (12 Seater) <span class="fw-bold">10.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Tables (8 Seater) <span class="fw-bold">8.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Small Garden Table <span class="fw-bold">5.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Ordinary Table (Small) <span class="fw-bold">2.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Ordinary Table (Big) <span class="fw-bold">4.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Foldable Chairs <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Fan Chairs <span class="fw-bold">1.50</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Flat Folding Special Chairs <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Chevari Gold Chairs <span class="fw-bold">4.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Special Executive Chairs <span class="fw-bold">4.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Gladiator Chairs <span class="fw-bold">3.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Ice Chest (Big & Barrel) <span class="fw-bold">10.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Ice Chest (Small) <span class="fw-bold">5.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Chafing Dishes <span class="fw-bold">10.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Decor and Accessories -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDecor">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDecor" aria-expanded="false" aria-controls="collapseDecor">
                            Decor and Accessories
                        </button>
                    </h2>
                    <div id="collapseDecor" class="accordion-collapse collapse" aria-labelledby="headingDecor" data-bs-parent="#pricingAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Center Pieces <span class="fw-bold">30.00 - 80.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    LED Lights <span class="fw-bold">Based on quantity needed</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Chair Covers <span class="fw-bold">2.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Chair Tie <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Napkins <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Special Vase + Flowers <span class="fw-bold">20.00 - 50.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Music and PA System <span class="fw-bold">200.00 - 500.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Generator <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Foam Mattress <span class="fw-bold">3.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Charger Plates (Plastic) <span class="fw-bold">2.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Charger Plates (Glass) <span class="fw-bold">4.00 (Special)</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Wine Glasses/Champagne <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Water Glasses <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Coloured Designed Wine Glass <span class="fw-bold">2.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Decorations <span class="fw-bold">Based on what you want</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Picture Backdrop <span class="fw-bold">500.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Couple Backdrops <span class="fw-bold">1000.00 - 3000.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Catering Services -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCatering">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCatering" aria-expanded="false" aria-controls="collapseCatering">
                            Catering Services
                        </button>
                    </h2>
                    <div id="collapseCatering" class="accordion-collapse collapse" aria-labelledby="headingCatering" data-bs-parent="#pricingAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Plates <a href="#contact" class="btn btn-sm btn-primary">Contact Event Manager</a></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Spoons <span class="fw-bold">1.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Forks <span class="fw-bold">50 pesewas</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Knives <span class="fw-bold">50 pesewas</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Table Cloth <span class="fw-bold">9.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bridal Couch and Table (Executive) <span class="fw-bold">500.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bridal Single Royal Couch <span class="fw-bold">250.00 per one</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bridal Couch and Table (Special) <span class="fw-bold">300.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bridal Special Single Chair (Basket Back) <span class="fw-bold">50.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bridal Special Single Chair (‘O’ Back) <span class="fw-bold">50.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bridal Single Couch <span class="fw-bold">80.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Fruit Juice Stand <span class="fw-bold">Popular request (bargained)</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Special Sobolo <span class="fw-bold">1.00 per bottle</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bottle Water (All Types) <span class="fw-bold">Price depends on choice</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Malta Guinness <span class="fw-bold"><a href="#contact" class="btn btn-sm btn-primary">Contact Event Manager</a></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Alvaro <span class="fw-bold"><a href="#contact" class="btn btn-sm btn-primary">Contact Event Manager</a></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Coke, Fanta, Sprite <span class="fw-bold"><a href="#contact" class="btn btn-sm btn-primary">Contact Event Manager</a></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Local Bar (Asana, Sobolo, Millet Drink, Palm Wine, Pineapple and Ginger) <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Catering Services (General) <span class="fw-bold">15.00 - 25.00 per person (based on specifications)</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Chilling of Drinks <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Supply of Ice Blocks <span class="fw-bold">-</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Other Services -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOther">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOther" aria-expanded="false" aria-controls="collapseOther">
                            Other Services
                        </button>
                    </h2>
                    <div id="collapseOther" class="accordion-collapse collapse" aria-labelledby="headingOther" data-bs-parent="#pricingAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Wedding Planner <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Event Manager/Co-ordinator <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of DJ and MC <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of Wedding Gown and Suit <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of Kente and Traditional Attire <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Local Bar/Cocktail Bar <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Packaging of Dowry <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bouquet <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Makeup Services <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of Souvenirs <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of Shoes <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of Music and DJ <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Provision of MC <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Bobobo Display, Kpanlogo and Adowa/Kete <span class="fw-bold">-</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Waiter and Usher Services <span class="fw-bold">-</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <p>For more information, please call: <a href="tel:0245740596">024 574 0596</a> or <a href="tel:0506586462">050 658 6462</a></p>
                <a href="#contact" class="btn btn-primary">Get a Quote</a>
            </div>
        </div>
    </section>
</div>

<!-- Bootstrap JS (for accordion and modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
