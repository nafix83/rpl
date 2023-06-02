<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Pajak</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <style>
    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 16px;
      background-color: white;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 99999;
    }
  </style>
</head>

<body class="bg-gray-100">
<nav class="bg-green-600 py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
          <div class="flex items-center space-x-10 text-white">
            <!-- <a href="#" class="text-white text-xl transition duration-300 ease-in-out font-bold"></a>
            <a href="#" class="text-white text-xl font-bold"></a> -->
          </div>
            <div class="text-white">
                <div class="mb-1 text-right">Karyawan Pajak</div>
                <div class="text-xs text-right">Accounting</div>
            </div>
        </div>
    </nav>

  <div class="container mx-auto py-6 mt-12">
    <div class="p-12 ">
      <div class="flex justify-center items-center mb-8">
        <div class="card mr-4 border-4 p-6 rounded-lg">
          <img class="w-32 mt-auto" src="imgPajak/upload.png" alt="upload data" id="uploadButton" />
          <h6 class="text-center mt-3 font-bold">Upload</h6>
        </div>
        <div class="card border-4 p-6 rounded-lg">
          <img class="w-32 mt-auto" src="imgPajak/download.png" alt="download data" id="downloadButton" />
          <h6 class="text-center mt-3 font-bold">Download</h6>
        </div>
      </div>
    </div>
    <div id="overlay" class="overlay">
      <div id="popup" class="popup">
        <h2 class="text-xl font-bold mb-4">File Data</h2>
        <input type="file" id="fileInput" class="mb-4" />
        <button
          id="submitButton"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        >
          Submit
        </button>
        <button
          id="cancelButton"
          class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"
        >
          Cancel
        </button>
      </div>
    </div>
  </div>

  <script>
    const uploadButton = document.getElementById("uploadButton");
    const overlay = document.getElementById("overlay");
    const popup = document.getElementById("popup");
    const cancelButton = document.getElementById("cancelButton");

    uploadButton.addEventListener("click", () => {
      overlay.style.display = "block";
      popup.style.display = "block";
    });

    cancelButton.addEventListener("click", () => {
      overlay.style.display = "none";
      popup.style.display = "none";
    });

    // Implement your file upload logic here
    const submitButton = document.getElementById("submitButton");
    submitButton.addEventListener("click", () => {
      const fileInput = document.getElementById("fileInput");
      const file = fileInput.files[0];
      if (file) {
        console.log("File selected:", file);
        // Implement your file upload code here
        // You can use AJAX or submit the form to a server endpoint
      } else {
        console.log("No file selected");
      }
    });

    const downloadButton = document.getElementById("downloadButton");

    downloadButton.addEventListener("click", () => {
      overlay.style.display = "block";
      popup.style.display = "block";
    });

    function simulateFileDownload() {
      // Replace the following code with your actual file download logic
      const fileData = "Hello, World!";
      const fileName = "example.txt";

      const blob = new Blob([fileData], { type: "text/plain" });
      const url = URL.createObjectURL(blob);

      const link = document.createElement("a");
      link.href = url;
      link.download = fileName;
      link.style.display = "none";

      document.body.appendChild(link);
      link.click();

      document.body.removeChild(link);
      URL.revokeObjectURL(url);
    }
  </script>
</body>

</html>
