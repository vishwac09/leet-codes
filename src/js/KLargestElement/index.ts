export class KthLargest {
  private k: number;
  private nums: number[];
  private length: number;
  constructor(k: number, nums: number[]) {
    this.k = k;
    this.nums = nums;
    this.length = nums.length;
  }

  add(val: number): number {
    this.nums.push(val);
    this.length += 1;
    this.nums.sort((a, b) => a - b);
    return this.nums[this.length - this.k];
  }
}

/**
 * Your KthLargest object will be instantiated and called as such:
 * var obj = new KthLargest(k, nums)
 * var param_1 = obj.add(val)
 */
