<?php 
/*********

Template Name: Template For pagination


*********/
get_header();
?>

	
	<!-- the input fields that will hold the variables we will use -->
	<input type='hidden' id='current_page' />
	<input type='hidden' id='show_per_page' />
	
	<!-- Content div. The child elements will be used for paginating(they don't have to be all the same,
		you can use divs, paragraphs, spans, or whatever you like mixed together). '-->
	<div id='content'>
	<table>
		<tr><p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>3Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>4Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>5Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>6Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>7Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>8Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
		<tr><p>9Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></tr>
</table>
	</div>

	<!-- An empty div which will be populated using jQuery -->
	<div id='page_navigation'></div>
	
	<table id="data">
    <thead>
    <tr>
        <th>S.No</th>
        <th>Category</th>
        <th>Product</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Clothing</td>
        <td>North Jacket</td>
        <td>$189.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Shoes</td>
        <td>Nike</td>
        <td>$59.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Sporting </td>
        <td>Ping Golf </td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Clothing</td>
        <td>Sweater</td>
        <td>$19.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Clothing</td>
        <td>North Jacket</td>
        <td>$189.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Shoes</td>
        <td>Nike</td>
        <td>$59.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Sporting</td>
        <td>Ping Golf</td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Shoes</td>
        <td>Nike</td>
        <td>$59.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Sporting </td>
        <td>North Jacket </td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Sporting</td>
        <td>Ping Golf</td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Shoes</td>
        <td>Nike</td>
        <td>$59.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Sporting </td>
        <td>North Jacket </td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Sporting</td>
        <td>Ping Golf</td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Shoes</td>
        <td>Nike</td>
        <td>$59.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Sporting </td>
        <td>North Jacket </td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Sporting</td>
        <td>Ping Golf</td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Shoes</td>
        <td>Nike</td>
        <td>$59.99</td>
        <td>In-stock</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Electronics</td>
        <td>LED TV</td>
        <td>$589.99</td>
        <td>Out of stock</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Sporting </td>
        <td>North Jacket </td>
        <td>$159.99</td>
        <td>In-stock</td>
    </tr>
    </tbody>
</table>
<?php get_footer(); ?>