class berlin_clock{

    constructor() {
        let now = new Date();
        let h = now.getHours();
        let m = now.getMinutes();
        let s = now.getSeconds();
    }

    get_seconds=()=>{
            this.seconds = document.querySelector("#html_seconds");
            seconds.textContent = "X";
            if(s%2 === 0) {
                return 0;
                seconds.textContent = "S";
            }
            return 1;
    }
}