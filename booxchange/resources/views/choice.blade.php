<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{asset('/css/choice.css')}}" >
</head>
<body>
    <div class="center">

        <div class="card">
          <div class="additional">
            <div class="user-card">
              <div class="icon center mb-5">
                <i class="bi bi-person-circle"></i>
              </div>
            </div>
            <div class="more-info">
              <h1>BUYER</h1>
              <div class="coords">
                <div class="button center mb-3" style="top: 40%;">
                  <a href="/userfile/user.html"><i class="bi bi-arrow-right"></i></a>
              </div>                  
              </div>
              <div class="stats">
                <div> 
                  <div class="title">Home</div>
                  <i class="bi bi-house"></i>
                </div>
                <div>
                  <div class="title">Profile</div>
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <div class="title">Transaction</div>
                  <i class="bi bi-clipboard"></i>     
                </div>
                <div>
                  <div class="title">Notifaction</div>
                  <i class="bi bi-bell"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="general">
            <h1>BUYER</h1>
            <p style="text-align: center; font-size:x-large ;">Can buy a book.</p>               
           <span class="more"></span>
          </div>
        </div>
      
        <div class="card green">
          <div class="additional">
            <div class="user-card">
              <div class="icon center mb-5">
                <i class="bi bi-bag"></i>
              </div> 
            </div>
            <div class="more-info">
              <h1>SELLER</h1>
              <div class="coords">
                <div class="button center mb-3" style="top: 40%;">
                  <a href="/seller/seller.html"><i class="bi bi-arrow-right"></i></a>
                </div>             
               </div>
              <div class="stats">
                <div> 
                  <div class="title">Home</div>
                  <i class="bi bi-house"></i>
                </div>
                <div>
                  <div class="title">Profile</div>
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <div class="title">sell</div>
                  <i class="bi bi-bag"></i>
                </div>
                <div>
                  <div class="title">Trans</div>
                  <i class="bi bi-clipboard"></i>     
                </div>
                <div>
                  <div class="title">Notifaction</div>
                  <i class="bi bi-bell"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="general">
            <h1>SELLER</h1>
            <p style="text-align: center; font-size:x-large ;">Can sell a book.</p>
            <span class="more"></span>
          </div>
        </div>
      
        <div class="card gray">
            <div class="additional">
              <div class="user-card">
                <div class="icon center mb-5">
                  <i class="fa-solid fa-arrow-right-arrow-left"></i>
                </div>
              </div>
              <div class="more-info">
                <h1>TRADE</h1>
                <div class="coords">
                <div class="button center mb-3" style="top: 40%;">
                  <a href="/trader/trade.html"><i class="bi bi-arrow-right"></i></a>
                </div>                                 
                </div>
                <div class="stats">
                  <div> 
                    <div class="title">Home</div>
                    <i class="bi bi-house"></i>
                  </div>
                  <div>
                    <div class="title">Profile</div>
                    <i class="bi bi-person"></i>
                  </div>
                  <div>
                    <div class="title">sell</div>
                    <i class="bi bi-bag"></i>
                  </div>
                  <div>
                    <div class="title">Trans</div>
                    <i class="bi bi-clipboard"></i>     
                  </div>
                  <div>
                    <div class="title">Notifaction</div>
                    <i class="bi bi-bell"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="general">
              <h1>TRADE</h1>
              <p style="text-align: center; font-size: x-large;">Can trade another book with other user.</p>
              <span class="more"></span>
            </div>
          </div>

      </div>    
</body>
</html>