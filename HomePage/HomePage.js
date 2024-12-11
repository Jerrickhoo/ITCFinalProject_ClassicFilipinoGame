//!=====================================================================================================================================================
//* Comment Section
//!=====================================================================================================================================================
function addComment() {
  const commentInput = document.getElementById("commentInput");
  const commentList = document.getElementById("comments");
  const commentText = commentInput.value.trim();

  if (commentText === "") {
    alert("Please write a comment before posting.");
    return;
  }

  // Create a new comment
  const comment = document.createElement("li");
  comment.className = "comment";

  const content = document.createElement("div");
  content.className = "comment-content";

  // User info and time
  const userInfo = document.createElement("div");
  userInfo.innerHTML = `<span class="comment-user">User</span><span class="comment-time">${new Date().toLocaleString()}</span>`;
  content.appendChild(userInfo);

  // Comment text
  const text = document.createElement("p");
  text.className = "comment-text";
  text.textContent = commentText;
  content.appendChild(text);

  // Actions: Edit, Delete, and Heart
  const actions = document.createElement("div");
  actions.className = "comment-actions";
  actions.innerHTML = `
        <button onclick="editComment(this)">Edit</button>
        <button onclick="deleteComment(this)">Delete</button>
        <button onclick="heartComment(this)">❤️ 0</button>
    `;
  content.appendChild(actions);

  // Append content to comment
  comment.appendChild(content);

  // Add to comment list
  commentList.appendChild(comment);

  // Clear the input field
  commentInput.value = "";
}

function editComment(button) {
  const comment = button.closest(".comment");
  const commentId = comment.dataset.id;
  const commentText = comment.querySelector(".comment-text");
  const newText = prompt("Edit your comment:", commentText.textContent);

  if (newText !== null) {
      fetch("edit_comment.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: `id=${commentId}&content=${encodeURIComponent(newText)}`,
      })
      .then((response) => response.json())
      .then((data) => {
          if (data.success) {
              commentText.textContent = newText;
              alert("Comment updated successfully!");
          } else {
              alert(data.message || "Failed to update comment.");
          }
      })
      .catch(() => alert("An error occurred while updating the comment."));
  }
}

function deleteComment(button) {
  const comment = button.closest(".comment");
  const commentId = comment.dataset.id;

  if (confirm("Are you sure you want to delete this comment?")) {
      fetch("delete_comment.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: `id=${commentId}`,
      })
      .then((response) => response.json())
      .then((data) => {
          if (data.success) {
              comment.remove();
              alert("Comment deleted successfully!");
          } else {
              alert(data.message || "Failed to delete comment.");
          }
      })
      .catch(() => alert("An error occurred while deleting the comment."));
  }
}

function heartComment(button) {
  const comment = button.closest(".comment");
  const commentId = comment.dataset.id;

  fetch("like_comment.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `id=${commentId}`,
  })
  .then((response) => response.json())
  .then((data) => {
      if (data.success) {
          let likeCount = parseInt(button.textContent.split(" ")[1]) || 0;
          likeCount++;
          button.textContent = `❤️ ${likeCount}`;
      } else {
          alert(data.message || "Failed to like comment.");
      }
  })
  .catch(() => alert("An error occurred while liking the comment."));
}


