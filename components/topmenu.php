<div class="animate__animated animate__fadeIn container-fluid top-menu" id="top-menu">
    <div class="row">
      <div class="col-lg-3 p-0">
        <div class="top-main-menu">
          <nav>
            <ul>
              <li class="main-top-1"><a class="active" href="#" data-menu="company">Company</a></li>
              <li class="main-top-1"><a href="#"
                  data-menu="capabilities">Capabilities</a></li>
              <li class="main-top-1"><a href="#" data-menu="industries">Industries</a>
              </li>
              <li class="main-top-1"><a href="#" data-menu="insights">Insights</a>
              </li>
              <li class="main-top-1"><a href="#" data-menu="career">Career</a></li>
              <li class="main-top-2"><a href="#" data-menu="employees">Employees</a></li>
              <li class="main-top-2"><a href="#" data-menu="suppliers">Suppliers</a></li>
              <li class="main-top-2"><a href="#" data-menu="contact">Contact us</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-9 bg-white p-0 second-top-last">
        <nav>
            <div class="d-flex menu-gap">
             
           <div>
           <h3 id="menu-title">Who We Are</h3>
          <ul id="submenu">
            <li><a href="#">Mission, Vision and Values</a></li>
            <li><a href="#">Our Leaders</a></li>
            <li><a href="#">Ethics &amp; Compliance</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Diversity, Equity And Inclusion</a></li>
            <li><a href="#">Contract Vechicles</a></li>
            <li><a href="#">Patnership</a></li>
            <li><a href="#">Global</a></li>
          </ul>
           </div>
               
            
             <div>
             <h3 style="visibility: hidden;">submenu2</h3>
          <ul id="submenu2">
           
          </ul>
             </div>
                
            </div>
         
        </nav>
      </div>
    </div>
  </div>

  <script>
    const menus = {
      company: {
        title: 'Who We Are',
        items: [
          { label: 'Mission, Vision and Values', link: '#' },
          { label: 'Our Leaders', link: '#' },
          { label: 'Ethics & Compliance', link: '#' },
          { label: 'Sustainability', link: '#' },
          { label: 'Diversity, Equity And Inclusion', link: '#' },
          { label: 'Contract Vechicles', link: '#' },
          { label: 'Patnership', link: '#' },
          { label: 'Global', link: '#' }
        ]
      },
      capabilities: {
        title: 'What We Do',
        items: [
          { label: 'Technology', link: '#' },
          { label: 'Business', link: '#' },
          { label: 'Engineering', link: '#' },
          { label: 'Mission', link: '#' }
       
        ]
      },
      industries: {
        title: 'Who We Serve',
        items: [
          { label: 'Automotive', link: '#' },
          { label: 'Banking', link: '#' },
          { label: 'Defense Intelligence', link: '#' },
          { label: 'Energy', link: '#' },
          { label: 'Government', link: '#' },
          { label: 'Health', link: '#' },
          { label: 'Homeland Security', link: '#' },
          { label: 'Manufacturing', link: '#' },
          { label: 'Homeland Security', link: '#' },
          { label: 'Public', link: '#' },
          { label: 'Science', link: '#' },
          { label: 'Space', link: '#' },
          { label: 'Travel And Transportation', link: '#' }
        ]
      },
      insights: {
        title: 'Preceptive',
        items: [
          { label: 'Articles', link: '#' },
          { label: 'Blogs', link: '#' },
          { label: 'Press Release', link: '#' },
          { label: 'Case Studies', link: '#' },
          { label: 'In The News', link: '#' },
          { label: 'Awards & Recognition', link: '#' },
          { label: 'Events', link: '#' },
          { label: 'Patnership', link: '#' }
        
        ]
      },
      career: {
        title: 'Search Jobs',
        items: [
          { label: 'Alumni', link: '#' },
          { label: 'About Life At HPIT', link: '#' },
          { label: 'Employees Benefits', link: '#' },
          { label: 'Experienced Professionals', link: '#' },
          { label: 'Internship & New Graduates', link: '#' },
          { label: 'Military Veterans', link: '#' },
          { label: 'Our Culture', link: '#' }
      
        ]
      }
    
    };

 
const submenu2 = {
  'Technology': [
    { label: 'Analytics', link: '#' },
    { label: 'Application', link: '#' },
    { label: 'Cloud', link: '#' },
    { label: 'Cyber', link: '#' },
    { label: 'Digital', link: '#' },
    { label: 'Enterprice IT', link: '#' },
    { label: 'WiFi Enterprice', link: '#' }
  ],
  'Business': [
    { label: 'Business Transformation', link: '#' },
    { label: 'Change Management', link: '#' },
    { label: 'Customer Experience', link: '#' },
    { label: 'Digital Commerce', link: '#' },
    { label: 'Finance Consulting', link: '#' },
    { label: 'Business Modernization', link: '#' },
    { label: 'Supply Chain Management', link: '#' }
  ],
  'Engineering': [
    { label: 'Digital Engineering', link: '#' },
    { label: 'Engineering Lifecycle Management', link: '#' },
    { label: 'Systems Engineering', link: '#' },
    { label: 'Software Development', link: '#' }
  ],
  'Mission': [
    { label: 'C2/4 & ISR', link: '#' },
    { label: 'Platforms Mission Support', link: '#' },
    { label: 'Operations & Sustainment', link: '#' },
    { label: 'Intelligence Operations Support', link: '#' }
  ]

};

function populateSubmenu2(submenu2Data) {
  const submenu2Element = document.getElementById('submenu2');
  submenu2Element.innerHTML = ''; // Clear existing items
  submenu2Data.forEach(item => {
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.textContent = item.label;
    a.href = item.link;
    li.appendChild(a);
    submenu2Element.appendChild(li);
  });
  submenu2Element.style.visibility = 'visible'; // Make submenu2 visible
}

document.getElementById('submenu').addEventListener('click', (event) => {
  if (event.target.tagName === 'A') {
    // Remove active class from all submenu items
    document.querySelectorAll('#submenu a').forEach(item => {
      item.classList.remove('active');
    });

    // Add active class to the clicked submenu item
    event.target.classList.add('active');

    const submenuTitle = event.target.textContent.trim();
    if (submenu2[submenuTitle]) {
      populateSubmenu2(submenu2[submenuTitle]);
    }
  }
});



function populateSubmenu(menuId, submenuData) {
      const submenuElement = document.getElementById('submenu');
      submenuElement.innerHTML = ''; // Clear existing items
      submenuData.forEach(item => {
        const li = document.createElement('li');
        const a = document.createElement('a');
        a.textContent = item.label;
        a.href = item.link;
        li.appendChild(a);
        submenuElement.appendChild(li);
      });
      submenuElement.style.display = 'block'; // Display submenu
    }

    document.querySelectorAll('.top-main-menu ul li.main-top-1 a').forEach(menuItem => {
    menuItem.addEventListener('click', (event) => {
      const submenu2Element = document.getElementById('submenu2');
      submenu2Element.style.visibility = 'hidden'; // Make submenu2 visible
        // Remove active class from all menu items
        document.querySelectorAll('.top-main-menu ul li.main-top-1 a').forEach(item => {
            item.classList.remove('active');
        });

        // Add active class to the clicked menu item
        menuItem.classList.add('active');

        const menuId = menuItem.getAttribute('data-menu');
        if (menus[menuId]) {
            populateSubmenu(menuId, menus[menuId].items);
            document.getElementById('menu-title').textContent = menus[menuId].title;
        }
    });
});

  </script>