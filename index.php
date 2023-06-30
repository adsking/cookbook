<html>

<head>
    <title>Recipe Cookbook</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Additional styles for search form */

        .search-form input[type="text"] {
            padding: 8px;
            width: 300px;
        }

        .search-form input[type="submit"] {
            padding: 8px 20px;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'popup.php'; ?>
    <div class="hero">
        <h1>Welcome to Recipe Cookbook</h1>
        <p>Explore a variety of delicious recipes</p>
    </div>
    <div class="recipe-container">
        <?php
        // Example data for recipe cards
        $recipes = array(
            array(
                'name' => 'Pasta Carbonara',
                'image' => 'https://familystylefood.com/wp-content/uploads/2022/01/Pasta-Carbonara-square.jpg',
                'description' => 'Classic Italian pasta dish made with eggs, cheese, pancetta, and black pepper.',
                'recipe' => 'Ingredients:<br>
                    - 200g spaghetti<br>
                    - 100g pancetta or bacon, diced<br>
                    - 2 large eggs<br>
                    - 50g Parmesan cheese, grated<br>
                    - Salt and black pepper to taste<br>
                    - Chopped parsley for garnish<br><br>
                    Instructions:<br>
                    1. Cook the spaghetti in a large pot of salted boiling water until al dente. Drain and set aside.<br>
                    2. In a pan, cook the pancetta or bacon until crispy. Remove from heat and set aside.<br>
                    3. In a bowl, whisk together the eggs, grated Parmesan cheese, salt, and black pepper.<br>
                    4. Add the cooked spaghetti to the pan with the pancetta or bacon. Stir well.<br>
                    5. Pour the egg mixture over the spaghetti and quickly stir until the eggs are cooked and coated the pasta.<br>
                    6. Serve hot, garnished with chopped parsley.',
            ),
            array(
                'name' => 'Chicken Parmesan',
                'image' => 'https://thecozycook.com/wp-content/uploads/2022/08/Chicken-Parmesan-Recipe-f-500x500.jpg',
                'description' => 'Breaded chicken cutlets topped with marinara sauce and melted cheese.',
                'recipe' => 'Ingredients:<br>
                    - 2 boneless, skinless chicken breasts<br>
                    - 1 cup breadcrumbs<br>
                    - 1/2 cup grated Parmesan cheese<br>
                    - 1/2 teaspoon dried oregano<br>
                    - 1/2 teaspoon dried basil<br>
                    - Salt and black pepper to taste<br>
                    - 1 cup marinara sauce<br>
                    - 1 cup shredded mozzarella cheese<br>
                    - Fresh basil leaves for garnish<br><br>
                    Instructions:<br>
                    1. Preheat the oven to 375°F (190°C).<br>
                    2. Pound the chicken breasts to an even thickness.<br>
                    3. In a shallow dish, combine the breadcrumbs, grated Parmesan cheese, dried oregano, dried basil, salt, and black pepper.<br>
                    4. Dip each chicken breast into the breadcrumb mixture, pressing to adhere.<br>
                    5. Heat oil in a skillet over medium heat and cook the chicken until golden brown on both sides.<br>
                    6. Place the cooked chicken in a baking dish, top with marinara sauce and shredded mozzarella cheese.<br>
                    7. Bake in the preheated oven for about 15 minutes, or until the cheese is melted and bubbly.<br>
                    8. Serve hot, garnished with fresh basil leaves.',
            ),
            array(
                'name' => 'Chocolate Chip Cookies',
                'image' => 'https://moonandspoonandyum.com/wp-content/uploads/2016/09/Pinterest-Pin-Templates-Moon-and-Spoon-and-Yum-1200-x-1200-px-40-300x300.jpg',
                'description' => 'Soft and chewy cookies loaded with chocolate chips.',
                'recipe' => 'Ingredients:<br>
                    - 1 cup unsalted butter, softened<br>
                    - 1 cup granulated sugar<br>
                    - 1 cup brown sugar<br>
                    - 2 large eggs<br>
                    - 1 teaspoon vanilla extract<br>
                    - 3 cups all-purpose flour<br>
                    - 1 teaspoon baking soda<br>
                    - 1/2 teaspoon salt<br>
                    - 2 cups chocolate chips<br><br>
                    Instructions:<br>
                    1. Preheat the oven to 375°F (190°C).<br>
                    2. In a large bowl, cream together the butter, granulated sugar, and brown sugar until light and fluffy.<br>
                    3. Beat in the eggs one at a time, then stir in the vanilla extract.<br>
                    4. In a separate bowl, whisk together the flour, baking soda, and salt.<br>
                    5. Gradually add the dry ingredients to the butter mixture and mix until well combined.<br>
                    6. Stir in the chocolate chips.<br>
                    7. Drop rounded tablespoons of dough onto ungreased baking sheets.<br>
                    8. Bake for 9 to 11 minutes, or until golden brown around the edges.<br>
                    9. Allow cookies to cool on the baking sheets for a few minutes, then transfer to wire racks to cool completely.',

            ),
            array(
                'name' => 'Caesar Salad',
                'image' => 'https://www.jessicagavin.com/wp-content/uploads/2019/07/caesar-salad-10-1200.jpg',
                'description' => 'Classic salad made with romaine lettuce, croutons, Parmesan cheese, and Caesar dressing.',
                'recipe' => 'Ingredients:<br>
                    - 3 large tomatoes, sliced<br>
                    - 1 pound fresh mozzarella cheese, sliced<br>
                    - Fresh basil leaves<br>
                    - Extra virgin olive oil<br>
                    - Balsamic glaze<br>
                    - Salt and black pepper to taste<br><br>
                    Instructions:<br>
                    1. Arrange the tomato and mozzarella slices on a serving platter.<br>
                    2. Place a basil leaf on top of each tomato and mozzarella slice.<br>
                    3. Drizzle with extra virgin olive oil and balsamic glaze.<br>
                    4. Season with salt and black pepper to taste.<br>
                    5. Serve immediately and enjoy!',
            ),
            array(
                'name' => 'Homemade Pizza',
                'image' => 'https://media.istockphoto.com/id/183273214/photo/pizza-from-the-top-vegetarian.jpg?s=612x612&w=0&k=20&c=AxcvTizCRPsPN3KsKq8GvAD7o6zUHBEDdJMOin0V31c=',
                'description' => 'Delicious pizza topped with your favorite ingredients and melted cheese.',
                'recipe' => 'Ingredients:<br>
                    - Pizza dough<br>
                    - Tomato sauce<br>
                    - Mozzarella cheese, shredded<br>
                    - Your choice of toppings (e.g., pepperoni, mushrooms, bell peppers, onions, olives)<br>
                    - Olive oil<br>
                    - Salt and black pepper to taste<br>
                    - Italian seasoning<br><br>
                    Instructions:<br>
                    1. Preheat the oven to 475°F (245°C).<br>
                    2. Roll out the pizza dough on a floured surface to your desired thickness.<br>
                    3. Transfer the rolled-out dough to a baking sheet or pizza stone.<br>
                    4. Brush olive oil over the surface of the dough to prevent it from getting soggy.<br>
                    5. Spread a layer of tomato sauce evenly over the dough.<br>
                    6. Sprinkle shredded mozzarella cheese over the sauce.<br>
                    7. Add your choice of toppings, distributing them evenly.<br>
                    8. Season with salt, black pepper, and Italian seasoning.<br>
                    9. Bake in the preheated oven for about 12-15 minutes, or until the crust is golden brown and the cheese is bubbly and slightly browned.<br>
                    10. Remove from the oven and let it cool for a few minutes before slicing and serving.',
            ),
            array(
                'name' => 'Classic Chocolate Cake',
                'image' => 'https://guptshopper.com/wp-content/uploads/2021/07/Chocolate-Truffle-Cake-Rs-300-300x300.jpg',
                'description' => 'Decadent and moist chocolate cake that will satisfy any chocolate lover.',
                'recipe' => 'Ingredients:<br>
                    - 2 cups all-purpose flour<br>
                    - 2 cups granulated sugar<br>
                    - 3/4 cup unsweetened cocoa powder<br>
                    - 1 1/2 teaspoons baking powder<br>
                    - 1 1/2 teaspoons baking soda<br>
                    - 1 teaspoon salt<br>
                    - 2 large eggs<br>
                    - 1 cup milk<br>
                    - 1/2 cup vegetable oil<br>
                    - 2 teaspoons vanilla extract<br>
                    - 1 cup boiling water<br>
                    - Chocolate frosting<br>
                    - Sprinkles or chocolate shavings (optional)<br><br>
                    Instruction:<br>
                    1. Preheat the oven to 350°F (175°C). Grease and flour two 9-inch round cake pans.<br>
                    2. In a large mixing bowl, sift together the flour, sugar, cocoa powder, baking powder, baking soda, and salt.<br>
                    3. Add the eggs, milk, vegetable oil, and vanilla extract to the dry ingredients. Mix until well combined.<br>
                    4. Gradually add the boiling water to the batter while mixing. The batter will be thin, but that\'s normal.<br>
                    5. Pour the batter evenly into the prepared cake pans.<br>
                    6. Bake for 30-35 minutes or until a toothpick inserted into the center of the cakes comes out clean.<br>
                    7. Remove the cakes from the oven and let them cool in the pans for 10 minutes.<br>
                    8. Transfer the cakes to a wire rack and let them cool completely.<br>
                    9. Once the cakes are cool, spread a layer of chocolate frosting on one cake layer.<br>
                    10. Place the second cake layer on top and frost the top and sides of the cake with the remaining frosting.<br>
                    11. Decorate with sprinkles or chocolate shavings if desired.<br>
                    12. Slice and serve the delicious chocolate cake!',
            ),
            array(
                'name' => 'Butter Chicken',
                'image' => 'https://www.196flavors.com/wp-content/uploads/2020/10/butter-chicken-3-FP.jpeg',
                'description' => 'Creamy and flavorful Indian butter chicken with tender chicken pieces in a rich tomato-based sauce.',
                'recipe' => 'Ingredients:<br>
                - 1.5 pounds boneless, skinless chicken thighs<br>
                - 1 cup plain yogurt<br>
                - 2 tablespoons lemon juice<br>
                - 2 teaspoons garam masala<br>
                - 2 teaspoons ground cumin<br>
                - 2 teaspoons paprika<br>
                - 1 teaspoon ground turmeric<br>
                - 1 teaspoon ground coriander<br>
                - 1 teaspoon chili powder (adjust to taste)<br>
                - 4 tablespoons butter<br>
                - 1 large onion, finely chopped<br>
                - 4 cloves garlic, minced<br>
                - 1-inch piece fresh ginger, grated<br>
                - 1 can (14 ounces) tomato sauce<br>
                - 1 cup heavy cream<br>
                - Salt to taste<br>
                - Fresh cilantro for garnish<br><br>
                Instruction:<br>
                1. In a bowl, combine the yogurt, lemon juice, garam masala, cumin, paprika, turmeric, coriander, and chili powder.<br>
                2. Add the chicken thighs to the marinade and coat them well. Let the chicken marinate for at least 1 hour or overnight in the refrigerator.<br>
                3. In a large skillet, melt the butter over medium heat.<br>
                4. Add the chopped onion and sauté until golden brown.<br>
                5. Add the minced garlic and grated ginger. Cook for another minute.<br>
                6. Add the marinated chicken thighs to the skillet and cook until they are browned on all sides.<br>
                7. Pour in the tomato sauce and stir well to combine.<br>
                8. Reduce the heat to low, cover the skillet, and let the chicken simmer for about 15-20 minutes, or until the chicken is cooked through and tender.<br>
                9. Stir in the heavy cream and season with salt to taste. Cook for an additional 5 minutes.<br>
                10. Garnish with fresh cilantro and serve the butter chicken with steamed rice or naan bread.',
            ),
            array(
                'name' => 'Chicken and Vegetable Rolls',
                'image' => 'https://www.mirchitales.com/wp-content/uploads/2020/03/Chicken-Vegetable-Spring-Rolls-3-500x500.jpg',
                'description' => 'Delicious and filling rolls filled with seasoned chicken and vegetables.',
                'recipe' => 'Ingredients:<br>
                - 1 pound ground chicken<br>
                - 1 small onion, finely chopped<br>
                - 1 carrot, grated<br>
                - 1 bell pepper, finely chopped<br>
                - 2 cloves garlic, minced<br>
                - 1 teaspoon ginger paste<br>
                - 1 teaspoon soy sauce<br>
                - 1/2 teaspoon chili powder<br>
                - 1/2 teaspoon ground cumin<br>
                - 1/2 teaspoon ground coriander<br>
                - Salt and pepper to taste<br>
                - 8-10 spring roll wrappers<br>
                - Oil for frying<br><br>
                Instruction:<br>
                1. In a large bowl, combine the ground chicken, chopped onion, grated carrot, chopped bell pepper, minced garlic, ginger paste, soy sauce, chili powder, cumin, coriander, salt, and pepper. Mix well.<br>
                2. Place a spring roll wrapper on a clean surface. Spoon a portion of the chicken and vegetable mixture onto one end of the wrapper.<br>
                3. Roll the wrapper tightly, folding in the sides as you go.<br>
                4. Moisten the edges of the wrapper with water to seal it.<br>
                5. Repeat the process with the remaining wrappers and filling.<br>
                6. Heat oil in a deep pan or skillet for frying.<br>
                7. Carefully place the rolls in the hot oil and fry until golden brown and crispy.<br>
                8. Remove the rolls from the oil and drain them on a paper towel to remove excess oil.<br>
                9. Serve the chicken and vegetable rolls hot with your favorite dipping sauce.',
            ),

        );

        // Check if a search query is submitted
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
            $filteredRecipes = array_filter($recipes, function ($recipe) use ($query) {
                return strpos(strtolower($recipe['name']), strtolower($query)) !== false;
            });

            // If there are matching recipes, display them
            if (!empty($filteredRecipes)) {
                foreach ($filteredRecipes as $recipe) {
                    echo '<div class="recipe-card">';
                    echo '<a href="recipe.php?name=' . urlencode($recipe['name']) . '&image=' . urlencode($recipe['image']) . '&description=' . urlencode($recipe['description']) . '&recipe=' . urlencode($recipe['recipe']) . '">';
                    echo '<img src="' . $recipe['image'] . '" alt="' . $recipe['name'] . '" width="300" height="300">';
                    echo '</a>';
                    echo '<h3>' . $recipe['name'] . '</h3>';
                    echo '<p>' . $recipe['description'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No recipes found matching your search query.</p>';
            }
        } else {
            // Display all recipes if no search query is present
            foreach ($recipes as $recipe) {
                echo '<div class="recipe-card">';
                echo '<a href="recipe.php?name=' . urlencode($recipe['name']) . '&image=' . urlencode($recipe['image']) . '&description=' . urlencode($recipe['description']) . '&recipe=' . urlencode($recipe['recipe']) . '">';
                echo '<img src="' . $recipe['image'] . '" alt="' . $recipe['name'] . '" width="300" height="300">';
                echo '</a>';
                echo '<h3>' . $recipe['name'] . '</h3>';
                echo '<p>' . $recipe['description'] . '</p>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>




<!DOCTYPE html>
<html>