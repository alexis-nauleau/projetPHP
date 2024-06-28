<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <main>
        <h1>Ajout Utilisateur</h1>
        <div class="expand-wrapper">
            <div class="expand">
                <div class="panel active" style="background-image: url(IMAGES/jaguar.jpg);">
                    <h4>Title</h4>
                </div>
                <div class="panel " style="background-image: url(IMAGES/loup.jpg);">
                    <h4>Title</h4>
                </div>
                <div class="panel " style="background-image: url(IMAGES/ours.jpg);">
                    <h4>Title</h4>
                </div>
                <div class="panel " style="background-image: url(IMAGES/panda.jpg);">
                    <h4>Title</h4>
                </div>
                <div class="panel " style="background-image: url(IMAGES/requin.jpg);">
                    <h4>Title</h4>
                </div>
                <div class="panel " style="background-image: url(IMAGES/tigre.jpg);">
                    <h4>Title</h4>
                </div>
            </div>
            <div class="user-form"></div>
        </div>

        


    </main>
    <script>
        const panels= document.querySelectorAll('.panel')
        panels.forEach((panel)=>{
            panel.addEventListener("click",()=>{
                removeActiveClasses()
                panel.classList.add("active")
            })
        });

        function removeActiveClasses(){
            panels.forEach((panel)=>{
                panel.classList.remove('active')
            })
        }
    </script>
</body>

</html>