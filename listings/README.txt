JSON Format for Listings:
{
  "sale": false,
  "carMakeModel": "Make Model",
  "carPrice": "$50,000",
  "carDescription": "Describe the listing here."
}

Note:
-Every JSON file must have an accompanying .jpg file that is exactly 328x235 pixels and has the same name
-The "sale" parameter does not need parenthesis
-The order in which the website processes the JSON files and displays them on the webpage is alphabetical

Instructions for Adding Entry in Website:
1. Create a new .json file and paste the JSON format into it
2. Change all parameters to suit the listing (you can have as many or as few tags as you wish)
3. Save the .json file and place the image in the same directory (listings) as the .json file
4. Ensure the JSON and JPG file both have the same name, apart from the extension
5. Make sure it is appearing on the homepage
6. Create a subdirectory of "gallery_images" and name it whatever the base name of the JSON and jpg file is
7. Add anywhere between one and ten 1140x500 pixel images of the listing to that directory
8. Add a 1900x400px file named "header.jpg" that will run along the top of the listing's detail page