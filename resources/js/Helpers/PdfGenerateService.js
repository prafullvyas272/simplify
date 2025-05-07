import html2canvas from "html2canvas";
import jsPDF from "jspdf";

const generatePdf = async (totalPages, maxHeight, fileName, updatePageId, nextTick) => {
    console.log(totalPages, maxHeight, fileName);

    const pdf = new jsPDF({
        orientation: "p",
        unit: "mm",
        format: [210, maxHeight],
    });

    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = pdf.internal.pageSize.getHeight();

    pdf.deletePage(1); // remove default blank page

    for (let i = 0; i < totalPages; i++) {
        const currentPageId = i + 1;
        await nextTick();
        if (typeof updatePageId === 'function') updatePageId(currentPageId); // call back to component

        await new Promise(resolve => setTimeout(resolve, 1000));

        const elementId = currentPageId.toString();
        const page = document.getElementById(elementId); // Grab just the visible one

        console.log(elementId, page);

        const canvas = await html2canvas(page, {
            scale: 1,
            useCORS: true,
            backgroundColor: "#ffffff",
        });
        console.log(canvas.height);

        const imgWidth = canvas.width;
        const imgHeight = canvas.height;

        const ratio = pdfWidth / imgWidth;
        const scaledHeight = imgHeight * ratio;

        if (scaledHeight <= pdfHeight) {
            const newheight = scaledHeight + 20;
            const imgData = canvas.toDataURL("image/jpeg", 1.0);

            if (i >= 0) pdf.addPage([210, newheight], "p");
            pdf.addImage(
                imgData,
                "JPEG",
                0,
                0,
                pdfWidth,
                scaledHeight
            );
        } else {
            // Split long content across multiple pages
            let position = 0;
            const pageHeightPx = pdfHeight / ratio; // in canvas pixels

            while (position < imgHeight) {
                const pageCanvas = document.createElement("canvas");
                pageCanvas.width = imgWidth;
                pageCanvas.height = Math.min(
                    pageHeightPx,
                    imgHeight - position
                );

                const ctx = pageCanvas.getContext("2d");
                ctx.drawImage(
                    canvas,
                    0,
                    position,
                    imgWidth,
                    pageCanvas.height,
                    0,
                    0,
                    imgWidth,
                    pageCanvas.height
                );

                const imgData = pageCanvas.toDataURL(
                    "image/jpeg",
                    1.0
                );
                if (position > 0 || i > 0) pdf.addPage();
                pdf.addImage(
                    imgData,
                    "JPEG",
                    0,
                    0,
                    pdfWidth,
                    pageCanvas.height * ratio
                );
                position += pageHeightPx;
            }
        }
    }

    pdf.save(fileName);
}
export default generatePdf;
