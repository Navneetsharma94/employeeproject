<script>
    var counter = 1;
    jQuery('a.add-friend').click(function(event){
        event.preventDefault();
        counter++;
        var newRow = jQuery('<tr><td><input type="text" name="name' +
            counter + '"/></td><td><input type="text" name="mobile' +
            counter + '"/></td><td><div class="form-group"><div class="checkbox"><input type="checkbox" name="about_singing' +
            counter + '"/>Singing</div><input type="text" name="about_singing'+
            counter + '"/></div><div class="form-group"><div class="checkbox"><input type="checkbox" name="about_dancing' +
            counter + '"/>Dancing</div><input type="text" name="about_dancing'+
            counter + '"/></div><div class="form-group"><div class="checkbox"><input type="checkbox" name="other_hobby' +
            counter + '"/>Other</div><input type="text" name="other_hobby'+
            counter + '"/></div></td><td><input type="text" name="about_friend' +
            counter + '"/></td></tr>');
        jQuery('table.friends-list').append(newRow);
    });
</script>