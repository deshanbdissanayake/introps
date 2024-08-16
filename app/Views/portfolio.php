<style>
    .bg-glass {
        background-color: #2d3345 !important;
    }
</style>

<section class="pd-tb-medium" data-rgen-sm="pd-tb-medium">
    <div class="container small filter-widget">
        <h2 class="title large mr-0 f-2 align-c" data-animate-in="fadeIn" data-rgen-sm="medium">Our Portfolio</h2>

        <div class="filter-list align-c" data-animate-in="fadeIn" id="tag_section">
            <!-- Tags will be dynamically inserted here -->
        </div>

        <ul class="rw eq3 gt30 mb30 popgallery-widget filter-container portfolio_section">
            <!-- Portfolio items will be dynamically inserted here -->
        </ul>
    </div>
</section>

<script>
    //======================================================================================
    // User interaction functions
    //======================================================================================

    $(document).ready(async function() {
        try {
            await getPortfolioTags();
            await getAllPortfolioData();
        } catch (error) {
            console.error('Initialization error:', error);
        }
    });

    $(document).on('click', '.tag_click', async function() {
        $('.tag_click').removeClass('active');
        $(this).addClass('active');
        const tag_id = $(this).data('id');
        try {
            if (tag_id === 'all') {
                await getAllPortfolioData();
            } else {
                await getPortfolioByTagId(tag_id);
            }
        } catch (error) {
            console.error('Error handling tag click:', error);
        }
    });

    //======================================================================================
    // Get data
    //======================================================================================

    const getPortfolioTags = async () => {
        try {
            const response = await fetch('/portfolio/get_portfolio_tags');
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            const data = await response.json();
            renderTags(data);
        } catch (error) {
            console.error('Fetch error for tags:', error);
        }
    };

    const getAllPortfolioData = async () => {
        try {
            const response = await fetch('/portfolio/get_port');
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            const data = await response.json();
            renderPortfolio(data);
        } catch (error) {
            console.error('Fetch error for all portfolio data:', error);
        }
    };

    const getPortfolioByTagId = async (tag_id) => {
        try {
            const response = await fetch(`/portfolio/get_port_by_id/${tag_id}`);
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            const data = await response.json();
            renderPortfolio(data);
        } catch (error) {
            console.error('Fetch error for portfolio by tag ID:', error);
        }
    };

    //======================================================================================
    // Render data
    //======================================================================================

    const renderTags = (data) => {
        let list = '';

        if (data.length > 0) {
            list = '<button class="active btn btn-dark bold-n mr-tb-20 tag_click mr-2" data-filter="all" data-id="all">All</button>';
            data.forEach(tag => {
                list += `<button class="btn btn-dark bold-n tag_click mr-2" data-id="${tag.tag_id}">${tag.tag_name}</button>`;
            });
        } else {
            list = '<p class="txt-danger">No Tags Found!</p>';
        }

        $('#tag_section').html(list);
    };

    const renderPortfolio = (data) => {
        let list = '';

        if (data.length > 0) {
            data.forEach(p => {
                const tagId = p.tag_id || '0';

                list += `
                    <li class="cl tag_${tagId} filter-content">
                        <figure class="hover-box1 mr-0">
                            <div class="overlay flex-bl typo-light">
                                <div class="content mr-30 z2">
                                    <!-- Pop-up Image and link -->
                                    <a href="${p.image_path}" class="inline-flex sq40 bg-primary flex-cc fs24 mr-b-20 pop-img"><i class="pe-7s-expand1"></i></a>
                                    <a href="${p.project_path}" target="_blank" class="inline-flex sq40 bg-primary flex-cc fs24 mr-b-20"><i class="pe-7s-link"></i></a>
                                    
                                    <h3 class="title mini bold-n">${p.title}</h3>
                                    <p class="mr-0 fs12 op-08">${p.subtitle}</p>
                                </div>
                                <b class="full-wh bg-dark op-09 z1 l0"></b>
                            </div>
                            <img src="${p.image_path}" alt="${p.title}">
                        </figure>
                    </li>
                `;
            });
        } else {
            list = '<p class="txt-danger">No Portfolio Images Found!</p>';
        }

        $('.portfolio_section').html(list);
    };

</script>
