function fetchProjectsByCategory(categoryId) {

    // AJAX request to fetch projects based on selected tag
    jQuery.ajax({
        url: ajax_object.ajax_url, // AJAX URL from wp_localize_script
        type: 'POST',
        data: {
            action: 'filter_projects_by_category', // Action hook for handling the request in WordPress
            category_id: categoryId // Selected category ID
        },
        success: function (response) {
            // Handle successful response and update the project list display
            var projects = JSON.parse(response); // Parse the JSON response
            updateProjectList(projects);
        },
        error: function (xhr, status, error) {
            console.error('Error fetching projects:', error);
        }
    });
}

function fetchProjectsByTag(tagId) {

    // AJAX request to fetch projects based on selected tag
    jQuery.ajax({
        url: ajax_object.ajax_url, // AJAX URL from wp_localize_script
        type: 'POST',
        data: {
            action: 'filter_projects_by_tag', // Action hook for handling the request in WordPress
            tag_id: tagId // Selected tag ID
        },
        success: function (response) {
            // Handle successful response and update the project list display
            var projects = JSON.parse(response); // Parse the JSON response
            updateProjectList(projects);
        },
        error: function (xhr, status, error) {
            console.error('Error fetching projects:', error);
        }
    });
}

// Update the grid of categories or tags chosen by the AJAX call
function updateProjectList(data) {
    var projectList = jQuery('#project-list');
    projectList.empty(); // Clear existing project list content

    // Iterate through JSON data and create grid items
    jQuery.each(data, function (index, project) {
        // Create grid item figure element
        var gridItem = jQuery('<figure>').addClass('grid-item');

        // Create anchor element with project link
        var link = jQuery('<a>').attr('href', 'http://wp-task-1.local/?post_type=project&p=' + project.ID);

        // Create image element
        var image = jQuery('<img>').attr({
            'src': project.featured_image, // Assuming project.featured_image contains the image URL
            'alt': project.title,
            'width': '285',
            'height': '285'
        }).addClass('attachment-285x285 size-285x285 wp-post-image');

        // Create figcaption element
        var caption = jQuery('<figcaption>').addClass('caption').append(jQuery('<span>').text(project.title));

        // Append image and caption to anchor element
        link.append(image, caption);

        // Append anchor element to grid item figure
        gridItem.append(link);

        // Append grid item to project list
        projectList.append(gridItem);
    });
}