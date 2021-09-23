export const revealSections = function (entries , observer){
    const [entry] = entries;
    console.log(entry);
    //if(!entry.isIntrsecting) return;
    entry.target.classList.remove('section--hidden');
    observer.unobserve(entry.target);

}