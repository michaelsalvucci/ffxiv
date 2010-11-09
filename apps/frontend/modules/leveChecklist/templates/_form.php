<?php echo form_tag_for($form, '@ffLeveChecklist') ?>
 <table id="job_form">
    <tfoot>
      <tr>
        <td colspan="2">
         <input type="submit" value="Preview your item" />
       </td>
      </tr>
    </tfoot>
   <tbody>
     <?php echo $form ?>
   </tbody>
 </table>
</form>
