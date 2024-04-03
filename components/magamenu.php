<div class="animate__animated animate__fadeIn container-fluid mega-menu" id="mega-menu">
    <div class="container">
        <div class="d-flex mega-menu-gap">
            <div class="block">
                <h4 class="image-title">
                    Mission, Vision and Values
                </h4>
                <figure>
                    <img src="assets/img/assets/top1.png" alt="In The News">
                </figure>
                <p class="image-discription">Discription</p>
            </div>
            <div>
                <nav class="menu-col-1">
                    <h3 id="megamenu-title"></h3>

                    <ul id="megamenu1"></ul>
                </nav>
            </div>
            <div>
                <nav class="menu-col-2">
                    <h3 style="visibility: hidden;">Who We Are</h3>

                    <ul id="megamenu2"></ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
const megamenus = {
    company: {
        title: 'Who We Are',
        header: {
            image: 'assets/img/assets/companyHeader.png',
            title: 'Our Company Mission',
            description: 'Learn about our goals and values.'
        },
        items: [{
                label: 'Mission, Vision and Values',
                link: '#',
                icon: 'mega1.svg'
            },
            {
                label: 'Our Leaders',
                link: '#',
                icon: 'mega2.svg'
            },
            {
                label: 'Ethics & Compliance',
                link: '#',
                icon: 'mega3.svg'
            },
            {
                label: 'Sustainability',
                link: '#',
                icon: 'mega4.svg'
            }

        ]
    },
    capabilities: {
        title: 'What We Do',
        items: [{
                label: 'Technology',
                link: '#',
                icon: 'mega9.svg'
            },
            {
                label: 'Business',
                link: '#',
                icon: 'mega10.svg'
            },
            {
                label: 'Engineering',
                link: '#',
                icon: 'mega11.svg'
            },
            {
                label: 'Mission',
                link: '#',
                icon: 'mega12.svg'
            }

        ]
    },
    industries: {
        title: 'Who We Serve',
        items: [{
                label: 'Automotive',
                link: '#',
                icon: 'mega20.svg'
            },
            {
                label: 'Banking',
                link: '#',
                icon: 'mega21.svg'
            },
            {
                label: 'Defense Intelligence',
                link: '#',
                icon: 'mega22.svg'
            },
            {
                label: 'Energy',
                link: '#',
                icon: 'mega23.svg'
            },
            {
                label: 'Government',
                link: '#',
                icon: 'mega24.svg'
            },
            {
                label: 'Health',
                link: '#',
                icon: 'mega25.svg'
            }
        ]
    },
    insights: {
        title: 'Preceptive',
        items: [{
                label: 'Articles',
                link: '#',
                icon: 'mega32.svg'
            },
            {
                label: 'Blogs',
                link: '#',
                icon: 'mega33.svg'
            },
            {
                label: 'Press Release',
                link: '#',
                icon: 'mega34.svg'
            },
            {
                label: 'Case Studies',
                link: '#',
                icon: 'mega35.svg'
            }

        ]
    },
    career: {
        title: 'Search Jobs',
        items: [{
                label: 'Alumni',
                link: '#',
                icon: 'mega39.svg'
            },
            {
                label: 'About Life At HPIT',
                link: '#',
                icon: 'mega40.svg'
            },
            {
                label: 'Employees Benefits',
                link: '#',
                icon: 'mega41.svg'
            },
            {
                label: 'Experienced Professionals',
                link: '#',
                icon: 'mega42.svg'
            }


        ]
    }

};

const megamenus2 = {
    company: {
        title: 'Who ad Are',
        items: [{
                label: 'Diversity, Equity And Inclusion',
                link: '#',
                icon: 'mega5.svg'
            },
            {
                label: 'Contract Vechicles',
                link: '#',
                icon: 'mega6.svg'
            },
            {
                label: 'Patnership',
                link: '#',
                icon: 'mega7.svg'
            },
            {
                label: 'Global',
                link: '#',
                icon: 'mega8.svg'
            }
        ]
    },
    capabilities: {
        title: 'What We Do',
        items: [{
                label: 'Analytics',
                link: '#',
                icon: 'mega13.svg'
            },
            {
                label: 'Application',
                link: '#',
                icon: 'mega14.svg'
            },
            {
                label: 'Cloud',
                link: '#',
                icon: 'mega15.svg'
            },
            {
                label: 'Cyber',
                link: '#',
                icon: 'mega16.svg'
            },
            {
                label: 'Digital',
                link: '#',
                icon: 'mega17.svg'
            },
            {
                label: 'Enterprice IT',
                link: '#',
                icon: 'mega18.svg'
            },
            {
                label: 'WiFi Enterprice',
                link: '#',
                icon: 'mega19.svg'
            },

        ]
    },
    industries: {
        title: 'Who We Serve',
        items: [{
                label: 'Homeland Security',
                link: '#',
                icon: 'mega26.svg'
            },
            {
                label: 'Manufacturing',
                link: '#',
                icon: 'mega27.svg'
            },
            {
                label: 'Public',
                link: '#',
                icon: 'mega28.svg'
            },
            {
                label: 'Science',
                link: '#',
                icon: 'mega29.svg'
            },
            {
                label: 'Space',
                link: '#',
                icon: 'mega30.svg'
            },
            {
                label: 'Travel And Transportation',
                link: '#',
                icon: 'mega31.svg'
            }
        ]
    },
    insights: {
        title: 'Preceptive',
        items: [{
                label: 'In The News',
                link: '#',
                icon: 'mega36.svg'
            },
            {
                label: 'Awards & Recognition',
                link: '#',
                icon: 'mega37.svg'
            },
            {
                label: 'Events',
                link: '#',
                icon: 'mega38.svg'
            }



        ]
    },
    career: {
        title: 'Search Jobs',
        items: [{
                label: 'Internship & New Graduates',
                link: '#',
                icon: 'mega43.svg'
            },
            {
                label: 'Military Veterans',
                link: '#',
                icon: 'mega44.svg'
            },
            {
                label: 'Our Culture',
                link: '#',
                icon: 'mega45.svg'
            }


        ]
    }

};

function populatemegamenuimage(menuId) {
    const submenuElement = document.getElementById('megamenu-items');
    submenuElement.innerHTML = ''; // Clear existing items

    const menuHeader = document.getElementById('megamenu-header');
    const menuImage = document.getElementById('megamenu-image');
    const menuTitle = document.getElementById('megamenu-title');
    const menuDescription = document.getElementById('megamenu-description');

    if (megamenus[menuId]) {
        const {
            title,
            items,
            header
        } = megamenus[menuId];

        // Populate header
        menuImage.src = header.image;
        menuImage.alt = title;
        menuTitle.textContent = header.title;
        menuDescription.textContent = header.description;

        // Populate items
        items.forEach(item => {
            const blockDiv = document.createElement('div');
            blockDiv.className = 'block';

            const titleH4 = document.createElement('h4');
            titleH4.className = 'image-title';
            titleH4.textContent = item.label; // Assuming item.label is what you want to use as the title

            const figure = document.createElement('figure');
            const img = document.createElement('img');
            img.src = item.image; // Assuming there is an item.image field
            img.alt = item.label;
            figure.appendChild(img);

            const descriptionP = document.createElement('p');
            descriptionP.className = 'image-description';
            descriptionP.textContent = item.description; // Assuming there is an item.description field

            blockDiv.appendChild(titleH4);
            blockDiv.appendChild(figure);
            blockDiv.appendChild(descriptionP);

            submenuElement.appendChild(blockDiv);
        });

        return title; // Return the title for further use if needed
    }

    return null; // Return null if menuId is not found
}



function populatemegamenu(menuId) {
    const submenuElement = document.getElementById('megamenu1');
    submenuElement.innerHTML = ''; // Clear existing items

    if (megamenus[menuId]) {
        const {
            title,
            items
        } = megamenus[menuId];
        items.forEach(item => {
            const li = document.createElement('li');
            const span = document.createElement('span');
            const img = document.createElement('img');
            img.src = 'assets/img/icons/' + item.icon; // Assuming the icon name is provided in the item object
            img.alt = item.label;
            span.appendChild(img);
            const a = document.createElement('a');
            a.textContent = item.label;
            a.href = item.link;
            li.appendChild(span);
            li.appendChild(a);
            submenuElement.appendChild(li);
        });

        submenuElement.style.display = 'block'; // Display submenu
        return title; // Return the title
    }

    return null; // Return null if menuId is not found
}

function populatemegamenu2(menuId) {
    const submenuElement = document.getElementById('megamenu2');
    submenuElement.innerHTML = ''; // Clear existing items

    if (megamenus2[menuId]) {
        const {
            title,
            items
        } = megamenus2[menuId];
        items.forEach(item => {
            const li = document.createElement('li');
            const span = document.createElement('span');
            const img = document.createElement('img');
            img.src = 'assets/img/icons/' + item.icon; // Assuming the icon name is provided in the item object
            img.alt = item.label;
            span.appendChild(img);
            const a = document.createElement('a');
            a.textContent = item.label;
            a.href = item.link;
            li.appendChild(span);
            li.appendChild(a);
            submenuElement.appendChild(li);
        });

        submenuElement.style.display = 'block'; // Display submenu
        return title; // Return the title
    }

    return null; // Return null if menuId is not found
}

// Example of how to use the title
document.querySelectorAll('.navbar-nav .nav-item').forEach(menuItem => {
    menuItem.addEventListener('mouseover', (event) => {
        // Remove 'active' class from all menu items
        document.querySelectorAll('.navbar-nav .nav-item').forEach(item => {
            item.classList.remove('active');
        });

        // Add 'active' class to the hovered menu item
        menuItem.classList.add('active');

        const megamenu = document.getElementById('mega-menu');
        megamenu.style.display = 'block'; // Display submenu
        const menuId = menuItem.querySelector('a').getAttribute('data-menu');
        const title = populatemegamenu(menuId);
        const image = populatemegamenuimage(menuId);
        if (title) {
            document.getElementById('megamenu-title').textContent = megamenus[menuId].title;
        }
    });
});


document.querySelectorAll('.navbar-nav .nav-item').forEach(menuItem2 => {
    menuItem2.addEventListener('mouseover', (event) => {
        const topMenu = document.querySelector(".top-menu");
        topMenu.classList.remove("active");
        document.querySelector('div#menuToggler img').setAttribute("src",
            "assets/img/icons/hamburger-open.svg");
        const menuId = menuItem2.querySelector('a').getAttribute('data-menu');
        const title = populatemegamenu2(menuId);
        // Add logic here to show/hide mega menu or handle other actions
    });
});



// Hide mega menu when mouse is not over the mega menu or the header
document.body.addEventListener('mouseover', (event) => {
    const isMegaMenu = event.target.closest('.mega-menu');
    const isHeader = event.target.closest('.header');

    if (!isMegaMenu && !isHeader) {
        const megamenu = document.getElementById('mega-menu');
        megamenu.style.display = 'none'; // Hide mega menu
        const menuItems = document.querySelectorAll('.navbar-nav .nav-item');

        menuItems.forEach(item => {
            item.classList.remove('active');
        });


    }
});
</script>