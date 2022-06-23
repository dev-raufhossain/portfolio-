
      <?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location:admin_login.php');
}
?>
         <!-- admin_card end -->
         <div class="admin_footer">
        <form action="">
            <p> <strong>Copyright</strong> by &#169;rauf</p>
        </form>
    </div>

</body>
</html>