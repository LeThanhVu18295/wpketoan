<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return Google fonts object.
 *
 * @since 1.0
 * @access public
 * @return $webfonts_json Google fonts object.
 */
function elegant_elements_get_webfonts_json() {
	$webfonts_json = '{
	  "items": [
	    {
	      "family": "ABeeZee",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Abel",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Abhaya Libre",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "sinhala"
	      ]
	    },
	    {
	      "family": "Abril Fatface",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Aclonica",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Acme",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Actor",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Adamina",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Advent Pro",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "greek",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Aguafina Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Akronim",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Aladin",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Alata",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Alatsi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Aldrich",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Alef",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin"
	      ]
	    },
	    {
	      "family": "Alegreya",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Alegreya SC",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Alegreya Sans",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Alegreya Sans SC",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Aleo",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Alex Brush",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Alfa Slab One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Alice",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin"
	      ]
	    },
	    {
	      "family": "Alike",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Alike Angular",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Allan",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Allerta",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Allerta Stencil",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Allura",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Almarai",
	      "variants": [
	        "300",
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "arabic"
	      ]
	    },
	    {
	      "family": "Almendra",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Almendra Display",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Almendra SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Amarante",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Amaranth",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Amatic SC",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "hebrew",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Amethysta",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Amiko",
	      "variants": [
	        "regular",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Amiri",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Amita",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Anaheim",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Andada",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Andika",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Angkor",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Annie Use Your Telescope",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Anonymous Pro",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "greek",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Antic",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Antic Didone",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Antic Slab",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Anton",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Arapey",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Arbutus",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Arbutus Slab",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Architects Daughter",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Archivo",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Archivo Black",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Archivo Narrow",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Aref Ruqaa",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Arima Madurai",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Arimo",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "hebrew",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Arizonia",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Armata",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Arsenal",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Artifika",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Arvo",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Arya",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Asap",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Asap Condensed",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Asar",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Asset",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Assistant",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin"
	      ]
	    },
	    {
	      "family": "Astloch",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Asul",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Athiti",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Atma",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "bengali",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Atomic Age",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Aubrey",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Audiowide",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Autour One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Average",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Average Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Averia Gruesa Libre",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Averia Libre",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Averia Sans Libre",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Averia Serif Libre",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "B612",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "B612 Mono",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bad Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Bahiana",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bahianita",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bai Jamjuree",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Bhai 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Bhaina 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "oriya",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Chettan 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "malayalam",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Da 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "bengali",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Paaji 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "gurmukhi",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Tamma 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "kannada",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Tammudu 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "telugu",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Baloo Thambi 2",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Balthazar",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bangers",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Barlow",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Barlow Condensed",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Barlow Semi Condensed",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Barriecito",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Barrio",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Basic",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Baskervville",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Battambang",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Baumans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bayon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Be Vietnam",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bebas Neue",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Belgrano",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bellefair",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Belleza",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bellota",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bellota Text",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "BenchNine",
	      "variants": [
	        "300",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bentham",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Berkshire Swash",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Beth Ellen",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bevan",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Big Shoulders Display",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Big Shoulders Text",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bigelow Rules",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bigshot One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bilbo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bilbo Swash Caps",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "BioRhyme",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "BioRhyme Expanded",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Biryani",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bitter",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Black And White Picture",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Black Han Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Black Ops One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Blinker",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bokor",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Bonbon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Boogaloo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bowlby One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bowlby One SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Brawler",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Bree Serif",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bubblegum Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bubbler One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Buda",
	      "variants": [
	        "300"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Buenard",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Bungee",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bungee Hairline",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bungee Inline",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bungee Outline",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Bungee Shade",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Butcherman",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Butterfly Kids",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cabin",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cabin Condensed",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cabin Sketch",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Caesar Dressing",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cagliostro",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cairo",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Caladea",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Calistoga",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Calligraffitti",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cambay",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cambo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Candal",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cantarell",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cantata One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cantora One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Capriola",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cardo",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Carme",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Carrois Gothic",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Carrois Gothic SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Carter One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Catamaran",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil"
	      ]
	    },
	    {
	      "family": "Caudex",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Caveat",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Caveat Brush",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cedarville Cursive",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Ceviche One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chakra Petch",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Changa",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Changa One",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Chango",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Charm",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Charmonman",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Chathura",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Chau Philomene One",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chela One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chelsea Market",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chenla",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Cherry Cream Soda",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cherry Swash",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chewy",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Chicle",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chilanka",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "malayalam"
	      ]
	    },
	    {
	      "family": "Chivo",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Chonburi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cinzel",
	      "variants": [
	        "regular",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cinzel Decorative",
	      "variants": [
	        "regular",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Clicker Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Coda",
	      "variants": [
	        "regular",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Coda Caption",
	      "variants": [
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Codystar",
	      "variants": [
	        "300",
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Coiny",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Combo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Comfortaa",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Comic Neue",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Coming Soon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Concert One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Condiment",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Content",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Contrail One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Convergence",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cookie",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Copse",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Corben",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cormorant",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cormorant Garamond",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cormorant Infant",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cormorant SC",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cormorant Unicase",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cormorant Upright",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Courgette",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Courier Prime",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cousine",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "hebrew",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Coustard",
	      "variants": [
	        "regular",
	        "900"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Covered By Your Grace",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Crafty Girls",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Creepster",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Crete Round",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Crimson Pro",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900",
	        "200italic",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Crimson Text",
	      "variants": [
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Croissant One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Crushed",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Cuprum",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Cute Font",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Cutive",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Cutive Mono",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "DM Sans",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "DM Serif Display",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "DM Serif Text",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Damion",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Dancing Script",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Dangrek",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Darker Grotesque",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "David Libre",
	      "variants": [
	        "regular",
	        "500",
	        "700"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Dawning of a New Day",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Days One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Dekko",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Delius",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Delius Swash Caps",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Delius Unicase",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Della Respira",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Denk One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Devonshire",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Dhurjati",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Didact Gothic",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Diplomata",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Diplomata SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Do Hyeon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Dokdo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Domine",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Donegal One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Doppio One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Dorsa",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Dosis",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Dr Sugiyama",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Duru Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Dynalight",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "EB Garamond",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Eagle Lake",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "East Sea Dokdo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Eater",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Economica",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Eczar",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "El Messiri",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "arabic",
	        "cyrillic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Electrolize",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Elsie",
	      "variants": [
	        "regular",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Elsie Swash Caps",
	      "variants": [
	        "regular",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Emblema One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Emilys Candy",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Encode Sans",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Encode Sans Condensed",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Encode Sans Expanded",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Encode Sans Semi Condensed",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Encode Sans Semi Expanded",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Engagement",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Englebert",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Enriqueta",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Erica One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Esteban",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Euphoria Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ewert",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Exo",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Exo 2",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900",
	        "100italic",
	        "200italic",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Expletus Sans",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Fahkwang",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Fanwood Text",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Farro",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Farsan",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Fascinate",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Fascinate Inline",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Faster One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Fasthand",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Fauna One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Faustina",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Federant",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Federo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Felipa",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fenix",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Finger Paint",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Fira Code",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fira Mono",
	      "variants": [
	        "regular",
	        "500",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fira Sans",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Fira Sans Condensed",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Fira Sans Extra Condensed",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Fjalla One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fjord One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Flamenco",
	      "variants": [
	        "300",
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Flavors",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fondamento",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fontdiner Swanky",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Forum",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Francois One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Frank Ruhl Libre",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Freckle Face",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fredericka the Great",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fredoka One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Freehand",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Fresca",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Frijole",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Fruktur",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Fugaz One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "GFS Didot",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "greek"
	      ]
	    },
	    {
	      "family": "GFS Neohellenic",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "greek"
	      ]
	    },
	    {
	      "family": "Gabriela",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin"
	      ]
	    },
	    {
	      "family": "Gaegu",
	      "variants": [
	        "300",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Gafata",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Galada",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "bengali",
	        "latin"
	      ]
	    },
	    {
	      "family": "Galdeano",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Galindo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gamja Flower",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Gayathri",
	      "variants": [
	        "100",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "malayalam"
	      ]
	    },
	    {
	      "family": "Gelasio",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Gentium Basic",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gentium Book Basic",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Geo",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Geostar",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Geostar Fill",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Germania One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Gidugu",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Gilda Display",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Girassol",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Give You Glory",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Glass Antiqua",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Glegoo",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gloria Hallelujah",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Goblin One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Gochi Hand",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Gorditas",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Gothic A1",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Gotu",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Goudy Bookletter 1911",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Graduate",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Grand Hotel",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gravitas One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Great Vibes",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Grenze",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Griffy",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gruppo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gudea",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Gugi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Gupter",
	      "variants": [
	        "regular",
	        "500",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Gurajada",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Habibi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Halant",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Hammersmith One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Hanalei",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Hanalei Fill",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Handlee",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Hanuman",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Happy Monkey",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Harmattan",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Headland One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Heebo",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin"
	      ]
	    },
	    {
	      "family": "Henny Penny",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Hepta Slab",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Herr Von Muellerhoff",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Hi Melody",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Hind",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Hind Guntur",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Hind Madurai",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil"
	      ]
	    },
	    {
	      "family": "Hind Siliguri",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "bengali",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Hind Vadodara",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Holtwood One SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Homemade Apple",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Homenaje",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IBM Plex Mono",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "IBM Plex Sans",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "IBM Plex Sans Condensed",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "IBM Plex Serif",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "IM Fell DW Pica",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell DW Pica SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell Double Pica",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell Double Pica SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell English",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell English SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell French Canon",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell French Canon SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell Great Primer",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "IM Fell Great Primer SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Ibarra Real Nova",
	      "variants": [
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Iceberg",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Iceland",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Imprima",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Inconsolata",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Inder",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Indie Flower",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Inika",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Inknut Antiqua",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Inria Sans",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Inria Serif",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Inter",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Irish Grover",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Istok Web",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Italiana",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Italianno",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Itim",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Jacques Francois",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Jacques Francois Shadow",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Jaldi",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Jim Nightshade",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Jockey One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Jolly Lodger",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Jomhuria",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Jomolhari",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "tibetan"
	      ]
	    },
	    {
	      "family": "Josefin Sans",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "100italic",
	        "200italic",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Josefin Slab",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Joti One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Jua",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Judson",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Julee",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Julius Sans One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Junge",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Jura",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Just Another Hand",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Just Me Again Down Here",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "K2D",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Kadwa",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin"
	      ]
	    },
	    {
	      "family": "Kalam",
	      "variants": [
	        "300",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kameron",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Kanit",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Kantumruy",
	      "variants": [
	        "300",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Karla",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Karma",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Katibeh",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kaushan Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kavivanar",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil"
	      ]
	    },
	    {
	      "family": "Kavoon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kdam Thmor",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Keania One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kelly Slab",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kenia",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Khand",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Khmer",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Khula",
	      "variants": [
	        "300",
	        "regular",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kirang Haerang",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Kite One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Knewave",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "KoHo",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Kodchasan",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Kosugi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "japanese",
	        "latin"
	      ]
	    },
	    {
	      "family": "Kosugi Maru",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "japanese",
	        "latin"
	      ]
	    },
	    {
	      "family": "Kotta One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Koulen",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Kranky",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Kreon",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kristi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Krona One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Krub",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Kulim Park",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kumar One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kumar One Outline",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Kurale",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "La Belle Aurore",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Lacquer",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Laila",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Lakki Reddy",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Lalezar",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lancelot",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Lateef",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Lato",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "League Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Leckerli One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Ledger",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Lekton",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Lemon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Lemonada",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Deca",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Exa",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Giga",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Mega",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Peta",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Tera",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lexend Zetta",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Libre Barcode 128",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Libre Barcode 128 Text",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Libre Barcode 39",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Libre Barcode 39 Extended",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Libre Barcode 39 Extended Text",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Libre Barcode 39 Text",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Libre Baskerville",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Libre Caslon Display",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Libre Caslon Text",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Libre Franklin",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Life Savers",
	      "variants": [
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Lilita One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Lily Script One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Limelight",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Linden Hill",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Literata",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Liu Jian Mao Cao",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Livvic",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lobster",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Lobster Two",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Londrina Outline",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Londrina Shadow",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Londrina Sketch",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Londrina Solid",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "900"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Long Cang",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Lora",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Love Ya Like A Sister",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Loved by the King",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Lovers Quarrel",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Luckiest Guy",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Lusitana",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Lustria",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "M PLUS 1p",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "hebrew",
	        "japanese",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "M PLUS Rounded 1c",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "hebrew",
	        "japanese",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Ma Shan Zheng",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Macondo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Macondo Swash Caps",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Mada",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Magra",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Maiden Orange",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Maitree",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Major Mono Display",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Mako",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Mali",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Mallanna",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Mandali",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Manjari",
	      "variants": [
	        "100",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "malayalam"
	      ]
	    },
	    {
	      "family": "Manrope",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "cyrillic",
	        "greek",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mansalva",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Manuale",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Marcellus",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Marcellus SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Marck Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Margarine",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Markazi Text",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Marko One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Marmelad",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Martel",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Martel Sans",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Marvel",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Mate",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Mate SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Maven Pro",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "McLaren",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Meddon",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "MedievalSharp",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Medula One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Meera Inimai",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "tamil"
	      ]
	    },
	    {
	      "family": "Megrim",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Meie Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Merienda",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Merienda One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Merriweather",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Merriweather Sans",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Metal",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Metal Mania",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Metamorphous",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Metrophobic",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Michroma",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Milonga",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Miltonian",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Miltonian Tattoo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Mina",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "bengali",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Miniver",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Miriam Libre",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mirza",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Miss Fajardose",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mitr",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Modak",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Modern Antiqua",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mogra",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Molengo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Molle",
	      "variants": [
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Monda",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Monofett",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Monoton",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Monsieur La Doulaise",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Montaga",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Montez",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Montserrat",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Montserrat Alternates",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Montserrat Subrayada",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Moul",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Moulpali",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Mountains of Christmas",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Mouse Memoirs",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mr Bedfort",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mr Dafoe",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mr De Haviland",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mrs Saint Delafield",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mrs Sheppards",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mukta",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mukta Mahee",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "gurmukhi",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Mukta Malar",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil"
	      ]
	    },
	    {
	      "family": "Mukta Vaani",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Muli",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900",
	        "200italic",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Mystery Quest",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "NTR",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Nanum Brush Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Nanum Gothic",
	      "variants": [
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Nanum Gothic Coding",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Nanum Myeongjo",
	      "variants": [
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Nanum Pen Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Neucha",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Neuton",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "italic",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "New Rocker",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "News Cycle",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Niconne",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Niramit",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Nixie One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nobile",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Nokora",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Norican",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Nosifer",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Notable",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nothing You Could Do",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Noticia Text",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Noto Sans",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "devanagari",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Noto Sans HK",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "chinese-hongkong",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Sans JP",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "japanese",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Sans KR",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Sans SC",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Sans TC",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "chinese-traditional",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Serif",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Noto Serif JP",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "japanese",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Serif KR",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Serif SC",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Noto Serif TC",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "chinese-traditional",
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Cut",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Flat",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Mono",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "greek",
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Oval",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Round",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Slim",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nova Square",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Numans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Nunito",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Nunito Sans",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Odibee Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Odor Mean Chey",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Offside",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Old Standard TT",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Oldenburg",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Oleo Script",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Oleo Script Swash Caps",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Open Sans",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Open Sans Condensed",
	      "variants": [
	        "300",
	        "300italic",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Oranienbaum",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Orbitron",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Oregano",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Orienta",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Original Surfer",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Oswald",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Over the Rainbow",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Overlock",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Overlock SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Overpass",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Overpass Mono",
	      "variants": [
	        "300",
	        "regular",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ovo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Oxanium",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Oxygen",
	      "variants": [
	        "300",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Oxygen Mono",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "PT Mono",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "PT Sans",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "PT Sans Caption",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "PT Sans Narrow",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "PT Serif",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "PT Serif Caption",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Pacifico",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Padauk",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "myanmar"
	      ]
	    },
	    {
	      "family": "Palanquin",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Palanquin Dark",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Pangolin",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Paprika",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Parisienne",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Passero One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Passion One",
	      "variants": [
	        "regular",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Pathway Gothic One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Patrick Hand",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Patrick Hand SC",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Pattaya",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Patua One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Pavanam",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "tamil"
	      ]
	    },
	    {
	      "family": "Paytone One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Peddana",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Peralta",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Permanent Marker",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Petit Formal Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Petrona",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Philosopher",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Piedra",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Pinyon Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Pirata One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Plaster",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Play",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Playball",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Playfair Display",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Playfair Display SC",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Podkova",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Poiret One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Poller One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Poly",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Pompiere",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Pontano Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Poor Story",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Poppins",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Port Lligat Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Port Lligat Slab",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Pragati Narrow",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Prata",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Preahvihear",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Press Start 2P",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Pridi",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Princess Sofia",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Prociono",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Prompt",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Prosto One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Proza Libre",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Public Sans",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900",
	        "100italic",
	        "200italic",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Puritan",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Purple Purse",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Quando",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Quantico",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Quattrocento",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Quattrocento Sans",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Questrial",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Quicksand",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Quintessential",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Qwigley",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Racing Sans One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Radley",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rajdhani",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rakkas",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Raleway",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Raleway Dots",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ramabhadra",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Ramaraja",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Rambla",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rammetto One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ranchers",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rancho",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Ranga",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rasa",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rationale",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Ravi Prakash",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Red Hat Display",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Red Hat Text",
	      "variants": [
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Redressed",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Reem Kufi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Reenie Beanie",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Revalia",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rhodium Libre",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ribeye",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ribeye Marrow",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Righteous",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Risque",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Roboto",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Roboto Condensed",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Roboto Mono",
	      "variants": [
	        "100",
	        "100italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Roboto Slab",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Rochester",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Rock Salt",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Rokkitt",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Romanesco",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ropa Sans",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rosario",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Rosarivo",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rouge Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Rozha One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rubik",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "hebrew",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rubik Mono One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ruda",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Rufina",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ruge Boogie",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ruluko",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rum Raisin",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ruslan Display",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Russo One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ruthie",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Rye",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sacramento",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sahitya",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin"
	      ]
	    },
	    {
	      "family": "Sail",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Saira",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Saira Condensed",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Saira Extra Condensed",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Saira Semi Condensed",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Saira Stencil One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Salsa",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Sanchez",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sancreek",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sansita",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sarabun",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Sarala",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sarina",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sarpanch",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Satisfy",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Sawarabi Gothic",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "japanese",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Sawarabi Mincho",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "japanese",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Scada",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Scheherazade",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Schoolbell",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Scope One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Seaweed Script",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Secular One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sedgwick Ave",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Sedgwick Ave Display",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Sen",
	      "variants": [
	        "regular",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sevillana",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Seymour One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Shadows Into Light",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Shadows Into Light Two",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Shanti",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Share",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Share Tech",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Share Tech Mono",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Shojumaru",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Short Stack",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Shrikhand",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "gujarati",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Siemreap",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Sigmar One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Signika",
	      "variants": [
	        "300",
	        "regular",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Signika Negative",
	      "variants": [
	        "300",
	        "regular",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Simonetta",
	      "variants": [
	        "regular",
	        "italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Single Day",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean"
	      ]
	    },
	    {
	      "family": "Sintony",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sirin Stencil",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Six Caps",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Skranji",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Slabo 13px",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Slabo 27px",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Slackey",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Smokum",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Smythe",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Sniglet",
	      "variants": [
	        "regular",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Snippet",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Snowburst One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sofadi One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Sofia",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Solway",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Song Myung",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Sonsie One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sorts Mill Goudy",
	      "variants": [
	        "regular",
	        "italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Source Code Pro",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Source Sans Pro",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Source Serif Pro",
	      "variants": [
	        "regular",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Space Mono",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Spartan",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Special Elite",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Spectral",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Spectral SC",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Spicy Rice",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Spinnaker",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Spirax",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Squada One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Sree Krushnadevaraya",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Sriracha",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Srisakdi",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Staatliches",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Stalemate",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Stalinist One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Stardos Stencil",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Stint Ultra Condensed",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Stint Ultra Expanded",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Stoke",
	      "variants": [
	        "300",
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Strait",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Stylish",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Sue Ellen Francisco",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Suez One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sulphur Point",
	      "variants": [
	        "300",
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sumana",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Sunflower",
	      "variants": [
	        "300",
	        "500",
	        "700"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Sunshiney",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Supermercado One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Sura",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Suranna",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Suravaram",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Suwannaphum",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Swanky and Moo Moo",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Syncopate",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Tajawal",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800",
	        "900"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Tangerine",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Taprom",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "khmer"
	      ]
	    },
	    {
	      "family": "Tauri",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Taviraj",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Teko",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Telex",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Tenali Ramakrishna",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Tenor Sans",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Text Me One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Thasadith",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "The Girl Next Door",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Tienne",
	      "variants": [
	        "regular",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Tillana",
	      "variants": [
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Timmana",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "telugu"
	      ]
	    },
	    {
	      "family": "Tinos",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "hebrew",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Titan One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Titillium Web",
	      "variants": [
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "900"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Tomorrow",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Trade Winds",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Trirong",
	      "variants": [
	        "100",
	        "100italic",
	        "200",
	        "200italic",
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "800",
	        "800italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "thai",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Trocchi",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Trochut",
	      "variants": [
	        "regular",
	        "italic",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Trykker",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Tulpen One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Turret Road",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "800"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ubuntu",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ubuntu Condensed",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ubuntu Mono",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "greek-ext",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Ultra",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Uncial Antiqua",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Underdog",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Unica One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "UnifrakturCook",
	      "variants": [
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "UnifrakturMaguntia",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Unkempt",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Unlock",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Unna",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "VT323",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Vampiro One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Varela",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Varela Round",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "hebrew",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Vast Shadow",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Vesper Libre",
	      "variants": [
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Viaoda Libre",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Vibes",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "arabic",
	        "latin"
	      ]
	    },
	    {
	      "family": "Vibur",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Vidaloka",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Viga",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Voces",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Volkhov",
	      "variants": [
	        "regular",
	        "italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Vollkorn",
	      "variants": [
	        "regular",
	        "italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic",
	        "900",
	        "900italic"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "greek",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Vollkorn SC",
	      "variants": [
	        "regular",
	        "600",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Voltaire",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Waiting for the Sunrise",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Wallpoet",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Walter Turncoat",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Warnes",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Wellfleet",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Wendy One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Wire One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Work Sans",
	      "variants": [
	        "100",
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700",
	        "800",
	        "900",
	        "100italic",
	        "200italic",
	        "300italic",
	        "italic",
	        "500italic",
	        "600italic",
	        "700italic",
	        "800italic",
	        "900italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Yanone Kaffeesatz",
	      "variants": [
	        "200",
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "cyrillic",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Yantramanav",
	      "variants": [
	        "100",
	        "300",
	        "regular",
	        "500",
	        "700",
	        "900"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Yatra One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "devanagari",
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Yellowtail",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Yeon Sung",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "korean",
	        "latin"
	      ]
	    },
	    {
	      "family": "Yeseva One",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "cyrillic",
	        "cyrillic-ext",
	        "latin",
	        "latin-ext",
	        "vietnamese"
	      ]
	    },
	    {
	      "family": "Yesteryear",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Yrsa",
	      "variants": [
	        "300",
	        "regular",
	        "500",
	        "600",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "ZCOOL KuaiLe",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "ZCOOL QingKe HuangYou",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "ZCOOL XiaoWei",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Zeyada",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "latin"
	      ]
	    },
	    {
	      "family": "Zhi Mang Xing",
	      "variants": [
	        "regular"
	      ],
	      "subsets": [
	        "chinese-simplified",
	        "latin"
	      ]
	    },
	    {
	      "family": "Zilla Slab",
	      "variants": [
	        "300",
	        "300italic",
	        "regular",
	        "italic",
	        "500",
	        "500italic",
	        "600",
	        "600italic",
	        "700",
	        "700italic"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    },
	    {
	      "family": "Zilla Slab Highlight",
	      "variants": [
	        "regular",
	        "700"
	      ],
	      "subsets": [
	        "latin",
	        "latin-ext"
	      ]
	    }
	  ]
	}';

	return json_decode( $webfonts_json );
}
