<form action="[[~[[*id]]]]?action=WriteTags" method="post" enctype="multipart/form-data">
  <input type="hidden" name="action" value="WriteTagsSave">
  <input type="hidden" name="id" value="[[+id]]">
  <input type="hidden" name="filename" value="[[+filename]]">
  <table border="0" cellspacing="0" cellpadding="4">
    <tr>
      <th align="right">Filename:</th>
      <td>[[+filename]]<!--a href="[[~[[*id]]]]?action=browse&mlID=[[+id]]" target="_blank">[[+filename]]</a--></td>
    </tr>
    <tr>
      <td align="right"><b>Title</b></td>
      <td><input type="text" size="40" name="titles"  value="[[+titles]]"></td>
    </tr>
    <tr>
      <td align="right"><b>Artist</b></td>
      <td><input type="text" size="40" name="artists" value="[[+artists]]"></td>
    </tr>
    <tr>
      <td align="right"><b>Album</b></td>
      <td><input type="text" size="40" name="albums"  value="[[+albums]]"></td>
    </tr>
    <tr>
      <td align="right"><b>Year</b></td>
      <td><input type="text" size="4"  name="years"   value="[[+years]]"></td>
    </tr>
    <tr>
      <td align="right"><b>Track</b></td>
      <td><input type="text" size="2" name="tracks" value="[[+tracks]]"> of <input type="text" size="2" name="TracksTotal" value="[[+tracks_total]]"></TD>
    </TR>
    <tr>
      <th align="right">Genre</th>
      <td><input type="text" name="genres" size="10" value="[[+genres]]"></td>
    </tr>
    <tr>
      <td align="right"><b>Write Tags</b></td>
      <td><input type="checkbox" name="TagFormatsToWrite[]" value="id3v1" checked="checked">
        id3v1<br>
        <input type="checkbox" name="TagFormatsToWrite[]" value="id3v2.3" checked="checked">
        id3v2.3<br>
        <input type="checkbox" name="TagFormatsToWrite[]" value="ape" checked="checked">
        ape<br>
        <hr>
        <input type="checkbox" name="remove_other_tags" value="1" checked="checked">
        Remove non-selected tag formats when writing new tag<br></td>
    </tr>
    <tr>
      <td align="right"><b>Comment</b></td>
      <td><textarea cols="30" rows="3" name="comments" wrap="virtual">[[+comments]]</textarea></td>
    </tr>
    <tr>
      <td align="right"><b>Picture</b><br>
        (ID3v2 only)</td>
      <td><input type="file" name="userfile" accept="image/jpeg, image/jpg, image/gif, image/png">
        <br><select name="APICpictureType">
            <option value="3">Cover</option>
            <option value="8">Artist/performer</option>
            <option value="20">Publisher/studio logo</option>
            <option value="16">Movie/video screen capture</option>
            <option value="6">Media (e.g. label side of CD)</option>
            <option value="18">Illustration</option>
            <option value="4">Cover (back)</option>
            <option value="1">32x32 pixels 'file icon' (PNG only)</option>
            <option value="0">Other</option>
        </select>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2"><input type="submit" name="WriteTags" value="Save Changes">
          <input type="reset" value="Reset"></td>
    </tr>
  </table>
</form>