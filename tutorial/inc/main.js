/*
  To Understand Ajax, Fetch, Promises

  Pyramid Of Doom || Callback Hell

  - What Is Callback
  - Callback Hell Example

  What Is Callback
  - A Function That Is Passed Into Another One As An Argument To Be Executed Later
  - Function To Handle Photos
  --- [1] Download Photo From URL
  --- [2] Resize Photo
  --- [3] Add Logo To The Photo
  --- [4] Show The Photo In Website
*/

/*

function makeItRed(e) {
  e.target.style.color = "red";
}
let p = document.querySelector('.test');
p.addEventListener("click", makeItRed);

function iamACallback () {
  console.log("I am a callback function");
}

setTimeout(iamACallback, 2000);

setTimeout(() => {
  console.log(`Download Photo From URL`);
  setTimeout(() => {
    console.log(`Resize Photo`);
    setTimeout(() => {
      console.log(`Add Logo To The Photo`);
      setTimeout(() => {
        console.log(`Show The Photo In Website`);
      }, 4000);
    }, 3000);
  }, 2000);
}, 1000);

*/


/*
  Promise Intro And Syntax
  - Promise In JavaScript Is Like Promise In Real Life
  - Promise Is Something That Will Happen In The Future
  - Promise Avoid Callback Hell
  - Promise Is The Object That Represent The Status Of An Asynchronous Operation And Its Resulting Value

  - Promise Status
  --- Pending: Initial State
  --- Fulfilled: Completed Successfully
  --- Rejected: Failed

  Story
  - Once A Promise Has Been Called, It Will Start In A Pending State
  - The Created Promise Will Eventually End In A Resolved State Or In A Rejected State
  - Calling The Callback Functions (Passed To Then And Catch) Upon Finishing.

  - Then
  --- Takes 2 Optional Arguments [Callback For Success Or Failure]
*/

// const myPromise = new Promise((resolveFunction, rejectFunction) => {
//   let connect = false;
//   if(connect) {
//     resolveFunction("Connection Established");
//   } else {
//     rejectFunction(Error("Connection Failed"));
//   }
// }).then(
//   (resolveValue) => console.log(`Good ${resolveValue}`),
//   (rejectValue) => console.log(`Bad ${rejectValue}`)
// );
/*

const myPromise = new Promise((resolveFunction, rejectFunction) => {
  let connect = true;
  if(connect) {
    resolveFunction("Connection Established");
  } else {
    rejectFunction(Error("Connection Failed"));
  }
});

console.log(myPromise);

let resolver = (resolveValue) => console.log(`Good ${resolveValue}`);
let rejecter = (rejectValue) => console.log(`Bad ${rejectValue}`);

myPromise.then(resolver, rejecter);

// myPromise.then(
//   (resolveValue) => console.log(`Good ${resolveValue}`),
//   (rejectValue) => console.log(`Bad ${rejectValue}`)
// );

// myPromise.then(
//   (resolveValue) => console.log(`Good ${resolveValue}`),
//   (rejectValue) => console.log(`Bad ${rejectValue}`)
// );

*/
/*
  Promise Training

  We Will Go To The Meeting, Promise Me That We Will Find The 4 Employees
  .then(We Will Choose Two People)
  .then(We Will Test Them Then Get One Of Them)
  .catch(No One Came)

  Then    => Promise Is Successfull Use The Resolved Data
  Catch   => Promise Is Failed, Catch The Error
  Finally => Promise Successfull Or Failed Finally Do Something
*/
/*
const myPromise1 = new Promise((resolveFunction, rejectFunction) => {
  let emplyees = ["Anas", "Ali", "Ahmed", "Arkan"];
  // let emplyees = [];
  if(emplyees.length === 4) {
    resolveFunction(emplyees);
  } else {
    rejectFunction(Error("Number Of Employees Are Not 4"))
  }
});

myPromise1.then((resolveValue) => {
    resolveValue.length = 2;
    return resolveValue;
    // console.log(resolveValue);
}).then((resolveValue) => {
    resolveValue.length = 1;
    return resolveValue;
}).then((resolveValue) => {
    console.log(`The choosen employee is ${resolveValue}`);
}).catch((rejectedReason) => {
  console.log(rejectedReason);
}).finally(console.log(`The operation is done`));

*/
/*
  Promise And XHR
*/
/*
const getData = (apiLink) => {
  return new Promise((resolve, rejecte) => {
    let myRequest = new XMLHttpRequest();
    myRequest.onload = function () {
      if (this.readyState === 4 && this.status === 200) {
        resolve(JSON.parse(this.responseText));
      } else {
        rejecte(Error("No Data Found"));
      }
    };
    myRequest.open("GET", apiLink);
    myRequest.send();
  });
};

getData("https://api.github.com/users/anasbanat0/repos").then(
  (result) => {
    result.length = 10;
    return result;
  }).then((result) => console.log(result[0].name)).catch(
    (rej) => console.log(rej)
  );

// "https://api.github.com/users/anasbanat0/repos"

// let jsData = JSON.parse(this.responseText);
// for (let i = 0; i < jsData.length; i++) {
//   let div = document.createElement("div");
//   let repoName = document.createTextNode(jsData[i].name);
//   div.appendChild(repoName);
//   document.body.appendChild(div);
// }

/*
    Fetch API
    - Return a representation of the entire http response
*/

// fetch("https://api.github.com/users/anasbanat0/repos").then((result) => {
//   let myData = result.json();
//   return myData;
// }).then((myData) => {
//   myData.length = 10;
//   return myData;
// }).then((myData) => {
//   console.log(myData[0].name);
// });


// const getData2 = (apiLink) => {
//   return new Promise((resolve, rejecte) => {
//     let myRequest = new XMLHttpRequest();
//     myRequest.onload = function () {
//       if (this.readyState === 4 && this.status === 200) {
//         resolve(JSON.parse(this.responseText));
//       } else {
//         rejecte(Error("No Data Found"));
//       }
//     };
//     myRequest.open("GET", apiLink);
//     myRequest.send();
//   });
// };

// getData2("https://api.github.com/users/anasbanat0/repos").then(
//   (result) => {
//     result.length = 10;
//     return result;
//   }).then((result) => console.log(result[0].name)).catch(
//     (rej) => console.log(rej)
//   );

/*
  Promise
  - All
  - All Settled
  - Race
*/
/*
const myFirstPromise = new Promise((res, rej) => {
  setTimeout(() => {
    res("I am The First Promise");
  }, 5000);
});

const mySecondPromise = new Promise((res, rej) => {
  setTimeout(() => {
    res("I am The Second Promise");
  }, 1000);
});

const myThirdPromise = new Promise((res, rej) => {
  setTimeout(() => {
    rej("I am The Third Promise");
  }, 2000);
});

// Promise.all([myFirstPromise, mySecondPromise, myThirdPromise]).then(
//   (resolvedValues) => console.log(resolvedValues),
//   (rejectedValues) => console.log(`Rejected: ${rejectedValues}`),
// );

// Promise.allSettled([myFirstPromise, mySecondPromise, myThirdPromise]).then(
//   (resolvedValues) => console.log(resolvedValues),
//   (rejectedValues) => console.log(`Rejected: ${rejectedValues}`),
// );

Promise.race([myFirstPromise, mySecondPromise, myThirdPromise]).then(
  (resolvedValues) => console.log(resolvedValues),
  (rejectedValues) => console.log(`Rejected: ${rejectedValues}`),
);
*/

/*
  Async
  - Async Before Function Mean This Function Return A Promise
  - Async And Await Help In Creating Asynchronous Promise Behavior With Cleaner Style
*/

// function getData3 () {
//   return new Promise((res, rej) => {
//     let users = [];
//     if (users.length > 0) {
//       res("Users Found");
//     } else {
//       rej("No Users Found");
//     }
//   });
// }

// getData3().then(
//   (resolvedValue) => console.log(resolvedValue),
//   (rejectedValue) => console.log("Rejected " + rejectedValue)
// );

// function getData3 () {
//   let users = ["Anas"];
//   if (users.length > 0) {
//     return Promise.resolve("Users Found");
//   } else {
//     return Promise.reject("No Users Found");
//   }
// }

// getData3().then(
//   (resolvedValue) => console.log(resolvedValue),
//   (rejectedValue) => console.log("Rejected " + rejectedValue)
// );

// async function getData3 () {
//   let users = [];
//   if (users.length > 0) {
//     return "Users Found";
//   } else {
//     throw new Error("No Users Found");
//   }
// }

// getData3().then(
//   (resolvedValue) => console.log(resolvedValue),
//   (rejectedValue) => console.log("Rejected " + rejectedValue)
// );

/*
  Await
  - Await Works Only Inside Async Functions
  - Await Make JavaScript Wait For The Promise Result
  - Await Is More Elegant Syntax Of Getting Promise Result
*/

/*
const myPromise2 = new Promise((resolve, reject) => {
  setTimeout(() => {
    // resolve("I am the good promise");
    reject(Error("I am the bad promise"));
  }, 3000);
});

async function readData() {
  console.log("Before Promise");
  // myPromise2.then((resolvedValue) => console.log(resolvedValue));
  // console.log(await myPromise2);
  console.log(await myPromise2.catch((err) => err));
  console.log("After Promise");
}

readData();
*/

/*
  Async & Await With Try, Catch, Finally
*/

// const myPromise3 = new Promise((resolve, reject) => {
//   setTimeout(() => {
//     resolve("I am the good promise");
//     // reject("I am the bad promise");
//   }, 3000);
// });

// async function readData1() {
//   console.log("Before Promise");
//   try {
//     console.log(await myPromise3);
//   } catch (reason) {
//     console.log(`Reason: ${reason}`);
//   } finally {
//     console.log("After Promise");
//   }
// }

// readData1();

// "https://api.github.com/users/anasbanat0/repos"

// async function fetchData() {
//   console.log("Before Fetch");
//   try {
//     let myData = await fetch("https://api.github.com/users/anasbanat0/repos");
//     console.log(await myData.json());
//   } catch (reason) {
//     console.log(`Reason: ${reason}`);
//   } finally {
//     console.log("After Fetch");
//   }
// }

// fetchData();

/**************************************/
const req = new XMLHttpRequest();
req.onload = async () => {
  return new Promise((resolve,reject) => {
    if(req.readyState === 4 && req.status === 200) {
      resolve(req.response)
    } else {
      reject("Data Not Found");
    }
  }).then(resolve => {
    let data = JSON.parse(resolve);
    data.length = 5;
    return data
  }).then(data => {
    for(let i = 0; i < data.length; i++) {
      let div = document.createElement("div")
      let h3 = document.createElement("h3")
      let p = document.createElement("p")

      h3.innerHTML = data[i]["title"]
      p.innerHTML = data[i]["description"]
      div.appendChild(h3)
      div.appendChild(p)
      document.body.appendChild(div)
    }
  }).catch(err => {
      console.log(err);
  });
};
req.open("get","../js/articles.json",true);
req.send();


async function fetchData() {
  try {
    const response = await fetch("../js/articles.json");
    const data = await response.json();
    data.length = 5;
    for(let i = 0; i < data.length; i++) {
      let div = document.createElement("div")
      let h3 = document.createElement("h3")
      let p = document.createElement("p")

      h3.innerHTML = data[i]["title"]
      p.innerHTML = data[i]["description"]
      div.appendChild(h3)
      div.appendChild(p)
      document.body.appendChild(div)
    }
  } 
  catch (error) {
    console.log("Data Not Found");
  }
}
fetchData()