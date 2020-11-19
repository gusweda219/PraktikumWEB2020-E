const buttons = document.querySelectorAll(".button");
let operatorActive = false;

for (let button of buttons) {
    button.addEventListener('click', function(event) {
        const input = event.target.innerText;

        if (input === '=') {
            document.querySelector("#displayNumber").innerText = eval(document.querySelector("#displayNumber").innerText);
            operatorActive = false;
            return;
        }

        if (input === 'x²') {
            if (!operatorActive) {
                document.querySelector("#displayNumber").innerText = eval(Math.pow(document.querySelector("#displayNumber").innerText, 2));
                return;
            } else {
                document.querySelector("#displayNumber").innerText = eval(Math.pow((document.querySelector("#displayNumber").innerText).slice(0, -1), 2));
                operatorActive = false;
                return;
            }
        }

        if (input === '%') {
            if (!operatorActive) {
                document.querySelector("#displayNumber").innerText = eval(document.querySelector("#displayNumber").innerText / 100);
                return;
            } else {
                document.querySelector("#displayNumber").innerText = eval(document.querySelector("#displayNumber").innerText.slice(0, -1) / 100);
                operatorActive = false;
                return;
            }
        }

        if (input === 'C') {
            document.querySelector("#displayNumber").innerText = '0';
            operatorActive = false;
            return;
        }

        

        const displayNumber = document.querySelector("#displayNumber").innerText;
        if (displayNumber === '0') {
            if (isNaN(input) && !input === '.' ) {
                return;
            } else {
                if (input === '.') {
                    document.querySelector("#displayNumber").innerText = document.querySelector("#displayNumber").innerText + input;
                } else {
                    document.querySelector("#displayNumber").innerText = input;
                }
            }
        } else {
            if (!isNaN(input)) {
                document.querySelector("#displayNumber").innerText =  document.querySelector("#displayNumber").innerText + input;
                operatorActive = false;
            } else {
                if (!operatorActive) {
                    document.querySelector("#displayNumber").innerText =  document.querySelector("#displayNumber").innerText + input;
                    operatorActive = true;
                } else {
                    document.querySelector("#displayNumber").innerText = (document.querySelector("#displayNumber").innerText).slice(0, -1) + input;
                }
            }
        }
    });
}
