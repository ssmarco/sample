<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title - Gallery</h1>
		<div class="content">
            $Content

            <% loop $GalleryPhotos %>
                <% if $Photo %>
                    <a href="$Photo.Link">$Photo.CroppedImage(50,50) ($Photo.Title)</a><br>
                <% end_if %>
            <% end_loop %>
        </div>
	</article>
		$Form
		$CommentsForm
</div>
