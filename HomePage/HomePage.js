
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

    // Add avatar
    const avatar = document.createElement("img");
    avatar.className = "comment-avatar";
    avatar.src = "default-avatar.png"; // Replace with your avatar image path
    avatar.alt = "Avatar";
    comment.appendChild(avatar);

    // Add comment content
    const content = document.createElement("div");
    content.className = "comment-content";

    // Add username and timestamp
    const userInfo = document.createElement("div");
    userInfo.innerHTML = `<span class="comment-user">User</span><span class="comment-time">${new Date().toLocaleString()}</span>`;
    content.appendChild(userInfo);

    // Add comment text
    const text = document.createElement("p");
    text.className = "comment-text";
    text.textContent = commentText;
    content.appendChild(text);

    // Add actions (like, dislike, reply)
    const actions = document.createElement("div");
    actions.className = "comment-actions";
    actions.innerHTML = `
        <button onclick="likeComment(this)">👍 Like</button>
        <button onclick="dislikeComment(this)">👎 Dislike</button>
        <button>Reply</button>
    `;
    content.appendChild(actions);

    comment.appendChild(content);

    // Append to comment list
    commentList.appendChild(comment);

    // Clear input field
    commentInput.value = "";
}

function likeComment(button) {
    button.textContent = "👍 Liked";
}

function dislikeComment(button) {
    button.textContent = "👎 Disliked";
}





//!=====================================================================================================================================================
//* loginModal
//!=====================================================================================================================================================
function openLoginModal() {
    const modal = document.getElementById("loginModal");
    modal.style.display = "flex";
}

function closeLoginModal() {
    const modal = document.getElementById("loginModal");
    modal.style.display = "none";
}

function processLogin(event) {
    event.preventDefault();

    // Get user input
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Mock login validation (replace with backend validation)
    if (username === "admin" && password === "password") {
        alert("Login successful!");
        closeLoginModal();
    } else {
        alert("Invalid username or password!");
    }
}
